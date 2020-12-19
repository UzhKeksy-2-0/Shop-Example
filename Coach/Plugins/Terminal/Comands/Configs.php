<?php

namespace CH\Plugins\Terminal\Comands;

use CH\basic\core\BC_Namespacer;
use CH\modificators\Terminal\Terminal;
use CH\Plugins\File\P_FileWorker;
use Nette\PhpGenerator\PhpFile;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class Configs extends Terminal
{    
    protected static $defaultName = 'config';    
    private $root;
    private $template;
    /**
     * __construct
     *
     * @param  mixed
     * @return void
     */
    public function __construct($root)
    {
        $this->root = $root;
        $this->template = $this->root . '/core/templatesCoach/config';
        parent::__construct();
    }    
    /**
     * configure
     * set configurations
     * @return void
     */
    protected function configure()
    {
        $this
            ->setHelp("CREATE - Creates file by controller template. If file exist it will be rewriten.\nUpdate updataes data from config to config.php")
            ->setDescription("Work with controller. Create, upload config")
            ->addArgument('key', InputArgument::REQUIRED, 'create create new config, upadate updates configs data');
    }    
    /**
     * execute
     *
     * @param  mixed $input
     * @param  mixed $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = $input->getArgument('key');
        switch ($command) {
            case 'create': {
                $helper = $this->getHelper('question');
                $qType = new ChoiceQuestion(
                    'Select config type',
                    [
                        'File',
                        'Class'
                    ],
                    '0,1'
                );
                $type = $helper->ask($input, $output, $qType);
                switch($type){
                    case 'File':
                        {
                            $qConfigName = new Question(
                                'Enter config name  ',
                            );
                            $configName = $helper->ask($input, $output, $qConfigName);
                            $qCreateType = new ChoiceQuestion(
                                'Select create file type',
                                [
                                    'create new config file',
                                    'create config file based on config class'
                                ]
                                );
                            $createType = $helper->ask($input,$output, $qCreateType);
                            if($createType == 'create new config file'){
                                $qConfigPath = new Question(
                                    'Enter config file path (with file name)  ',
                                );
                                $conifgPath = $helper->ask($input, $output, $qCreateType);
                                file_put_contents($conifgPath,'');
                            }else{
                                $qConfigClassLocation = new Question(
                                    'Enter path to config class (with file name  )',
                                );
                                $constants = new \ReflectionClass($this->getClassFullNameFromFile($qConfigClassLocation));
                                $qConfigPath = new Question(
                                    'Enter config file path',
                                );
                                $conifgPath = $helper->ask($input, $output, $qCreateType);
                                file_put_contents($conifgPath, json_encode($constants));

                            }
                            break;
                        }
                    case 'Class':
                        {
                            $qConfigName = new Question(
                                'Enter config name  '
                            );
                            $configName = $helper->ask($input, $output, $qConfigName);
                            $qCreateType = new ChoiceQuestion(
                                'Select create file type',
                                [
                                    'create new config class',
                                    'create conifg class based on config file'
                                ]
                                );
                            $createType = $helper->ask($input, $output, $qCreateType);
                            echo $createType;
                            if($createType == 'create new config class'){
                                $qConfigClassLocation = new Question(
                                    'Enter config class path (with file name)  '
                                );
                                $configPath = $helper->ask($input, $output, $qCreateType);
                                file_put_contents($configPath,'');
                            }else{
                                $qConfigClassLocation = new Question(
                                    'Enter config class path (with NO file name)  '
                                );
                                $configPath = $helper->ask($input, $output, $qCreateType);
                                $qConfigFileLocation = new Question(
                                    'Enter config file path   '
                                );
                                $configFileLocation = $helper->ask($input, $output, $qConfigFileLocation);
                                $templateData = json_decode(
                                    $configFileLocation
                                );
                                $file = new PhpFile;
                                BC_Namespacer::$composerPath = './composer.json';
                                $namespace  = $file->addNamespace(BC_Namespacer::generateNameSpaceByPath($configPath));
                                $class = $namespace->addClass($configName);
                                foreach($templateData as $name => $value){
                                    $class->addConstant($name,$value);
                                }
                            }
                            break;
                        }
                }
                break;
            }
        }
        return Command::SUCCESS;
    }
    /**
     * Method getClassFullNameFromFile
     * gets full class name from file
     * @param $filePathName $filePathName [file path]
     *
     * @return void
     */
    private function getClassFullNameFromFile($filePathName)
    {
        return $this->getClassNamespaceFromFile($filePathName) . '\\' . $this->getClassNameFromFile($filePathName);
    }


    /**
     * Method getClassObjectFromFile
     *  build and return an object of a class from its file path
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    private function getClassObjectFromFile($filePathName)
    {
        $classString = $this->getClassFullNameFromFile($filePathName);
        $object = new $classString;
        return $object;
    }

    /**
     * Method getClassNamespaceFromFile
     *
     * get the class namespace form file path using token
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    protected function getClassNamespaceFromFile($filePathName)
    {
        $src = file_get_contents($filePathName);
        $tokens = token_get_all($src);
        $count = count($tokens);
        for ($i = 0, $namespace_ok = false, $namespace = ''; $i < $count; ++$i) {
            $token = $tokens[$i];
            if ((is_array($token)) && ($token[0] === T_NAMESPACE)) {
                while (++$i < $count) {
                    if ($tokens[$i] === ';') {
                        $namespace_ok = true;
                        $namespace = trim($namespace);
                        return $namespace_ok ? $namespace : null;
                    }
                    $namespace .= is_array($tokens[$i]) ? $tokens[$i][1] : $tokens[$i];
                }
            }
        }
    }

    /**
     * Method getClassNameFromFile
     *
     * get the class name form file path using token
     * 
     * @param $filePathName $filePathName [explicite description]
     *
     * @return void
     */
    protected function getClassNameFromFile($filePathName)
    {
        $php_code = file_get_contents($filePathName);
        $classes = [];
        $tokens = token_get_all($php_code);
        $count = count($tokens);
        for ($i = 0; $i < $count; $i++) {
            if (($tokens[$i - 2][0] == T_CLASS) && ($tokens[$i - 1][0] == T_WHITESPACE) && ($tokens[$i][0] == T_STRING)) {
                $class_name = $tokens[$i][1];
                $classes[] = $class_name;
            }
        }
        return $classes[0];
    }
}
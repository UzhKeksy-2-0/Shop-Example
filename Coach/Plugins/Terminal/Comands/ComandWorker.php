<?php
namespace CH\Plugins\Terminal\Comands;

use CH\modificators\Terminal\Terminal;
use CH\basic\core\BC_Namespacer;
use CH\modificators\File\FileWorker\FileWorker;
use CH\Plugins\File\P_FileWorker;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\PhpNamespace;
use Nette\Utils\FileSystem;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;

class ComandWorker extends Terminal
{
    private string $root;
    protected static $defaultName = 'terminal';
    public function __construct(string $root)
    {
        $this->root = $root;
        parent::__construct();
    }
    protected function configure()
    {
        $this
            ->addOption(
                'create',
                '-c',
                InputOption::VALUE_OPTIONAL,
                "create new command \n<info>Values</info>   default (d);   min;   max",
                null,
            )
            ->addOption(
                'remove',
                '-r',
                InputOption::VALUE_OPTIONAL,
                "removes comand by name (Name have to be letter in letter)",
                null
            );
    
    }   

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // $output->writeln($input->getOption('create'));
        if($input->getOption('remove') != null){
            $output->writeln($this->root .'/'. $input->getOption('remove'). '.php succesfuly was deleted');
            (new FileWorker)->remove($this->root .'/'. $input->getOption('remove'). '.php');
        }
        if($input->getOption('create')){
            $createType = $input->getOption('create');
            $helper = $this->getHelper('question');
            // get filename
            $qFileName = new Question('Please enter file name  ','test');
            $fileName = $helper->ask($input, $output,$qFileName);
            // get comand name
            $qComandName = new Question('Please enter comand name  ','test');
            $comandName = $helper->ask($input, $output, $qComandName);

            switch($createType)
            {
                case 'default':
                case 'd':
                case 'min':
                {
                    $file = new PhpFile;
                    BC_Namespacer::$composerPath = '../composer.json';
                    $namespace = $file->addNamespace(BC_Namespacer::generateNameSpaceByPath($this->root));
                    $namespace
                        ->addUse('CH\modificators\Terminal\Terminal')
                        ->addUse('Symfony\Component\Console\Input\InputInterface')
                        ->addUse('Symfony\Component\Console\Output\OutputInterface')
                        ->addUse('Symfony\Component\Console\Input\InputArgument')
                        ->addUse('Symfony\Component\Console\Input\InputOption')
                        ->addUse('Symfony\Component\Console\Question\Question');
                    $class = $namespace->addClass($fileName);
                    $class->addExtend('CH\modificators\Terminal\Terminal');
                    $class->addProperty('defaultName',$comandName )
                        ->setStatic()
                        ->setProtected();
                    $mExecute = $class->addMethod('execute');
                    $mExecute
                    ->setProtected()
                    ->addParameter('output')
                    ->setType('Symfony\Component\Console\Input\InputInterface');
                    $mExecute
                        ->addParameter('input')
                        ->setType('Symfony\Component\Console\Output\OutputInterface');
                    $mExecute
                        ->addBody('return Terminal::SUCCESS;');
                    file_put_contents($this->root . "/" .$fileName . '.php',$file);
                    break;
                }
                case 'max':
                {
                    break;
                }

            }
        }
        return Terminal::SUCCESS;
    }
}
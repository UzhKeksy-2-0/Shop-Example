<?php

namespace CH\Plugins\Terminal\Comands;

use CH\Plugins\File\P_FileWorker;
use SplFileInfo;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\Question;

class Configs extends Command
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
            ->addArgument('key', InputArgument::REQUIRED, 'create create new config, upadate updates configs data')
            ->addArgument('config path', InputArgument::REQUIRED, 'path to config file (*.json)');
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
            case 'update':
            case 'create': {
                $splFileInfo = new SplFileInfo($input->getArgument('config path'));
                // check if file has right extension
                if($splFileInfo->getExtension() == "json"){
                    // get data from giver file (.json)
                    $templateData = json_decode(file_get_contents($input->getArgument('config path')));
                }else{
                    // if file does not have any extension return Failure
                    return Command::FAILURE;
                }
                // name of new file
                $path_parts = pathinfo($input->getArgument('config path'));
                // get file folder (to add there .php file)
                $dirName = $splFileInfo->getPath();
                // get demo text from config template
                $text = file_get_contents($this->template);
                // write to user
                $output->writeln('<info>Controller is succesfully added</info>');
                // create new file by P_Filworker
                $filer = new P_FileWorker();
                $filer->dumpFile($this->root. '/' . $path_parts['filename'].'.php',$text);
                break;
            }
        }
        return Command::SUCCESS;
    }
}
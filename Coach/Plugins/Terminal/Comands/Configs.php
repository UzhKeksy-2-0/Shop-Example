<?php

namespace CH\Plugins\Terminal\Comands;

use CH\Plugins\File\P_FileWorker;
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
        
        $question = new Question('Please enter the name of the bundle', 'AcmeDemoBundle');

        $bundleName = $helper->ask($input, $output, $question);
        $command = $input->getArgument('key');
        switch ($command) {
            case 'update':
            case 'create': {
                $text = file_get_contents($this->template);
                $filer = new P_FileWorker();
                $output->writeln('<info>Controller is succesfully added</info>');
                $filer->dumpFile($this->root. '/' . $input->getArgument('config path'),$text);
                break;
            }
            case 'update': {

                break;
            }
        }
        return Command::SUCCESS;
    }
}

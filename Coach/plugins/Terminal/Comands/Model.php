<?php

namespace CH\plugins\Terminal\Comands;

use CH\plugins\File\P_FileWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Model extends Command
{    
    protected static $defaultName = 'model';    
    private $root;
    private $template;
    /**
     * __construct
     *
     * @param  mixed $root if it is null, it will be config file by default
     * @return void
     */
    public function __construct($root)
    {
        $this->root = $root;
        $this->template = $this->root . '/core/templatesCoach/controller';
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
            ->setHelp("CREATE - Creates file by controller template. If file exist it will be rewriten.\nFIND - Finds file by file name in all project")
            ->setDescription("Work with controller. Create, find controller")
            ->addArgument('key', InputArgument::REQUIRED, 'create -create new view, find find view')
            ->addArgument('viewName', InputArgument::REQUIRED, 'name of view that you want to work with');;
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
                $text = file_get_contents($this->template);
                $filer = new P_FileWorker();
                $output->writeln('<info>Model is succesfully added</info>');
                $filer->dumpFile($this->root. '/models/' . $input->getArgument('viewName'). '.php',$text);
                break;
            }
            case 'find': {

                break;
            }
        }
        return Command::SUCCESS;
    }
}

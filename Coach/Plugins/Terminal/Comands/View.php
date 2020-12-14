<?php

namespace CH\Plugins\Terminal\Comands;

use CH\Plugins\File\P_FileWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class View extends Command
{    
    protected static $defaultName = 'view';    
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
        $this->template = $this->root . '/core/templatesCoach/view';
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
            ->setHelp("CREATE - Creates file by views template. If file exist it will be rewriten.\nFIND - Finds file by file name in all project")
            ->setDescription("Work with views. Create, find views")
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
                $output->writeln('<info>View is succesfully added</info>');
                $filer->dumpFile($this->root. '/views/templates/' . $input->getArgument('viewName'),$text);
                break;
            }
            case 'find': {

                break;
            }
        }
        return Command::SUCCESS;
    }
}

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
    private $configs;
    private $template;
    /**
     * __construct
     *
     * @param  mixed $configs if it is null, it will be config file by default
     * @return void
     */
    public function __construct($configs = null)
    {
        if($configs == null){
            $configs = $_SERVER['DOCUMENT_ROOT'].'/application/configs/path.config.php';
        }
        $this->configs = $configs;
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
            ->setDescription("Work with views\n  Create, find, tCreate views")
            ->addArgument('key', InputArgument::REQUIRED, 'create -create new view, find find view')
            ->addArgument('view name', InputArgument::REQUIRED, 'name of view that you want to work with');;
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
                include $this->configs;
                $filer = new P_FileWorker();
                break;
            }
            case 'find': {

                break;
            }
        }
        return Command::SUCCESS;
    }
}

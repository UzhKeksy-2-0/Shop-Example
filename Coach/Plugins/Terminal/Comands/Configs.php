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
use Symfony\Component\Console\Input\InputOption;
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
            ->addOption(
                'create',
                '-c',
                InputOption::VALUE_OPTIONAL,
                "create new config class by config file \n<info>Values</info>  newLocation (NL);   sameLocation (SL)",
                'jsonFolder',
            )
            ->addOption(
                'updateClass',
                '-uc',
                InputOption::VALUE_REQUIRED,
                "updates config class \n<info>Values</info>   newLocation (NL);   sameLocation (SL);",
                ['sameLocation' => 'fileName']
            )
            ->addOption(
                'updateConfig',
                '-uC',
                InputOption::VALUE_REQUIRED,
                "updates config file \n<info>Values</info>   newLocation (NL);   sameLocation (SL);",
                ['sameLocation' => 'fileName']
            )
            ->addOption(
                'remove',
                '-r',
                InputOption::VALUE_REQUIRED,
                "removes config class by path",
                null
            );
    }    
    /**
     * execute
     *
     * @param  mixed $input
     * @param  mixed $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {}
}
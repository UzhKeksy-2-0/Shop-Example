<?php
namespace CH\Plugins\Terminal\Comands;

use CH\modificators\Terminal\Terminal;
use CH\basic\core\BC_Namespacer;
use CH\modificators\File\FileWorker\FileWorker;
use CH\Plugins\File\P_FileWorker;
use Nette\PhpGenerator\PhpFile;
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
            $output->writeln($this->root .'/'. $input->getOption('remove'). '.php');
            (new FileWorker)->remove($this->root .'/'. $input->getOption('remove'). '.php');
        }
        return Terminal::SUCCESS;
    }
}
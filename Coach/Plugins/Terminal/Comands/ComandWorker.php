<?php
namespace CH\Plugins\Terminal\Comands;

use CH\modificators\Terminal\Terminal;
use CH\basic\core\BC_Namespacer;
use CH\Plugins\File\P_FileWorker;
use Nette\PhpGenerator\PhpFile;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Question\Question;

class ComandWorker extends Terminal
{
    protected static $defaultName = 'terminal';
    /**
     * configure
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setHelp('test')
            ->setDescription('-c:d creates by default (no help no description no argments)');
        $this
            ->addOption(
                'create',
                '-c',
                InputOption::VALUE_OPTIONAL,
                'create new command',
                null
            );
    
    }   

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($input->getOption('create'));
        return Terminal::SUCCESS;
    }
}
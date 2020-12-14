<?php

namespace CH\Plugins\Terminal\Comands;

use CH\Plugins\File\P_FileWorker;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

class Tester extends Command
{    
    protected static $defaultName = 'test';    
    protected function execute(InputInterface $input, OutputInterface $output){
        $helper = $this->getHelper('process');
        $process = new Process(['figlet', 'Symfony']);
        $helper->run($output, $process);
    }
}

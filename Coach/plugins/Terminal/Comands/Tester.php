<?php

namespace CH\plugins\Terminal\Comands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class Tester extends Command
{    
    protected static $defaultName = 'test';    
    protected function execute(InputInterface $input, OutputInterface $output){
        $io = new SymfonyStyle($input, $output);
        $io->choice('Select the queue to analyze', ['queue1', 'queue2', 'queue3'], 'queue1');
        $output->writeln('<fg=green>foo</>');

        // red text
        $output->writeln('<fg=#c0392b>foo</>');
        
        // black text on a cyan background
        $output->writeln('<fg=black;bg=cyan>foo</>');
        
        // bold text on a yellow background
        $output->writeln('<bg=yellow;options=bold>foo</>');
        
        // bold text with underscore
        $output->writeln('<options=bold,underscore>foo</>');
        return Command::SUCCESS;
    }
}
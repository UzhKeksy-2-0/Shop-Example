<?php
namespace CH\Plugins\Terminal;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
class CreateViewCommand extends Command
{
    protected static $defaultName = 'view:create';
    protected function configure(){
        $this
        ->setDescription('Create new view by name')
        ->setHelp('This...');
    }
    protected function execute(InputInterface $inupt, OutputInterface $output){
        $output->writeln('<error>Puk</error>');
        return Command::SUCCESS;
    }

}
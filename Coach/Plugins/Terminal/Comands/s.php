<?php

namespace CH\Plugins\Terminal\Comands;

use CH\modificators\Terminal\Terminal;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class s extends Terminal
{
	protected static $defaultName = 's';


	protected function execute(InputInterface $output, OutputInterface $input)
	{
		return Terminal::SUCCESS;
	}
}

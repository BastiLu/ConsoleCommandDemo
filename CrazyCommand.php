<?php

declare(strict_types=1);

namespace In2code\In2template\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CrazyCommand extends Command
{
    protected function configure()
    {
        $this->addArgument('argumentOne', InputArgument::OPTIONAL, 'beschreibung', 'test');
        $this->addArgument('argumentTwo', InputArgument::OPTIONAL, 'beschreibung', 'test');
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($input->getArgument('argumentOne'));
        $output->writeln($input->getArgument('argumentTwo'));
        return Command::SUCCESS;
    }
}

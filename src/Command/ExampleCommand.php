<?php declare(strict_types=1);

namespace SwagTraining\CliCommand\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

class ExampleCommand extends Command
{
    protected function configure(): void
    {
        $this->setName('training:example');
        $this->setDescription('Simple CLI example');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln('Hello World!');

        return 0;
    }
}

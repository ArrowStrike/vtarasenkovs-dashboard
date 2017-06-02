<?php

namespace DashboardBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DeleteAllMessagesCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('dashboard.delete-all-messages')
            ->setDescription('Deletes all cache.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            [
                '',
                '--------Cache Deletion--------',
                '==============================',
                '',
            ]
        );

        $memcache = $this->getContainer()->get('memcache');
        $memcache->deleteMessage();

        $output->writeln('Cache was successfully deleted!');
        $output->writeln(
            [
                '==============================',
                '',
            ]
        );

        return;
    }
}

<?php

namespace DashboardBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use DashboardBundle\Entity\Message;


class AddNewMessageCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->addArgument('username', InputArgument::REQUIRED, 'The username of the user.')
            ->addArgument('email', InputArgument::REQUIRED, 'The email of the user.')
            ->addArgument('message', InputArgument::REQUIRED, 'The message of the user.')
            ->setName('dashboard.add-new-message')
            ->setDescription('Adds new message.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(
            [
                '-------Message Creation-------',
                '==============================',
                '',
            ]
        );
        $output->writeln('Username: '.$input->getArgument('username'));
        $output->writeln('Email: '.$input->getArgument('email'));
        $output->writeln('Message: '.$input->getArgument('message'));

        $message = new Message();
        $message->setAll(
            $input->getArgument('username'),
            $input->getArgument('email'),
            $input->getArgument('message')
        );

        $validator = $this->getContainer()->get('validator');
        $errors = $validator->validate($message);

        if (empty($errors)) {
            $output->writeln('Error list:');
            foreach ($errors as $error) {
                $output->writeln(
                    [
                        $error,
                    ]
                );
            }
        } else {
            $output->writeln(
                [
                    '',
                    '==============================',
                ]
            );
            $message = $this->getContainer()->get('add_message')->saveMessage($message);
            $output->writeln('Message with ID = '.$message->getId().' successfully added!');
        }
        $output->writeln('');

        return;
    }
}

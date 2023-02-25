<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Task extends Command{
    

    public function configure()
    {
        $this->setName('create-admin')
            ->setDescription("Create admin")
            ->addArgument('username',InputArgument::REQUIRED,'Admin name')
            ->addOption('role',null,InputOption::VALUE_OPTIONAL,'Role name','admin');
    }


    public function execute(InputInterface $input, OutputInterface $output): int
    {   
        $message = sprintf('%s %s',$input->getArgument('username') ,$input->getOption('role'));
        $output->writeln("<info>{$message}</info>");
        return Command::SUCCESS;
    }
}
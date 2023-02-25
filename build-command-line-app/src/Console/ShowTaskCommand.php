<?php

namespace App\Console;

use App\Database\DB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowTaskCommand extends Task{
    
    public $database;

    public function __construct(DB $database)
    {
        
        $this->database = $database;
        parent::__construct();
    }

    
    public function configure()
    {
        $this->setName('task:list')
            ->setDescription("Task list");
    }


    public function execute(InputInterface $input, OutputInterface $output): int
    {   
        $this->showTask($output);
        return Command::SUCCESS;
    }


    public function showTask(OutputInterface $output)
    {
        $tasks = $this->database->all('task');

        $table = new Table($output);

        $table->setHeaders(['ID','Description'])
        ->setRows($tasks)
        ->render();
    }
}
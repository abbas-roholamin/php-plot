<?php

namespace App\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RenderCommand extends Command{
    

    public function configure()
    {
        $this->setName('render')
            ->setDescription("render tables");
    }


    public function execute(InputInterface $input, OutputInterface $output): int
    {   
        $table = new Table($output);

        $table->setHeaders(['Name','Role'])
        ->setRows([
            ['Abbas Roholamin','Administrator'],
            ['Abbas Rezai','User']
        ])
        ->render();
        return Command::SUCCESS;
    }
}
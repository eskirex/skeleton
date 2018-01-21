<?php

namespace App\Command;

use Eskirex\Component\Console\Command;

class TestCommand extends Command
{
    public function configure()
    {
        $this->setName('app:test')
            ->setDescription('test desctiption')
            ->setHelp('test help')
            ->setArgument('username', 1)
            ->setArgument('deneme', 3)
        ;

    }


    public function execute()
    {
        echo 'execute method ' . $this->getArgument('username') . $this->getArgument('deneme');
    }
}
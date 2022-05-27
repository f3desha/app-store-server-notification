<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class NoCommand implements Command
{

    public function execute(): void
    {
        echo "NoCommand\n";
    }

    public function undo(): void
    {
        echo "NoCommand\n";
    }
}

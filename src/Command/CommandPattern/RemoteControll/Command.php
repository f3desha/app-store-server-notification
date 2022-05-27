<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}

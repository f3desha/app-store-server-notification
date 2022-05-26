<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class RemoteControl
{
    /**
     * @var Command[] $commandsOn
     */
    private array $commandsOn = [];

    /**
     * @var Command[] $commandsOff
     */
    private array $commandsOff = [];

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) {
            $this->commandsOn[$i] = new NoCommand();
            $this->commandsOff[$i] = new NoCommand();
        }
    }


    public function setCommand(int $buttonId, Command $commandOn, Command $commandOff): void
    {
        $this->commandsOn[$buttonId] = $commandOn;
        $this->commandsOff[$buttonId] = $commandOff;
    }

    public function onButtonWasPushed($buttonId): void
    {
        $this->commandsOn[$buttonId]->execute();
    }

    public function offButtonWasPushed($buttonId): void
    {
        $this->commandsOff[$buttonId]->execute();
    }
}

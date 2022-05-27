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

    /**
     * @var Command $undoCommand
     */
    private Command $undoCommand;

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) {
            $this->commandsOn[$i] = new NoCommand();
            $this->commandsOff[$i] = new NoCommand();
        }
        $this->undoCommand = new NoCommand();
    }


    public function setCommand(int $buttonId, Command $commandOn, Command $commandOff): void
    {
        $this->commandsOn[$buttonId] = $commandOn;
        $this->commandsOff[$buttonId] = $commandOff;
    }

    public function onButtonWasPushed($buttonId): void
    {
        $this->commandsOn[$buttonId]->execute();
        $this->undoCommand = $this->commandsOn[$buttonId];
    }

    public function offButtonWasPushed($buttonId): void
    {
        $this->commandsOff[$buttonId]->execute();
        $this->undoCommand = $this->commandsOff[$buttonId];
    }

    public function undoButtonWasPushed(): void
    {
        $this->undoCommand->undo();
    }
}

<?php

namespace OOP\App\Command\CommandPattern;

class SimpleRemoteControl
{
    /**
     * @var Command $slot
     */
    private Command $slot;

    public function setCommand(Command $command): void
    {
        $this->slot = $command;
    }

    public function buttonWasPressed(): void
    {
        $this->slot->execute();
    }
}

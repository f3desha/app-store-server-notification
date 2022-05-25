<?php

namespace OOP\App\Command\CommandPattern;

class GarageDoorOpenCommand implements Command
{

    /**
     * @var GarageDoor $garageDoor
     */
    private GarageDoor $garageDoor;

    /**
     * @param GarageDoor $garageDoor
     */
    public function __construct(GarageDoor $garageDoor)
    {
        $this->garageDoor = $garageDoor;
    }


    public function execute(): void
    {
        $this->garageDoor->lightOn();
        $this->garageDoor->up();
    }
}

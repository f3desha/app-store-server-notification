<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class GarageDoorOpenCommand implements Command
{

    /**
     * @var GarageDoor $door
     */
    private GarageDoor $door;

    /**
     * @param GarageDoor $door
     */
    public function __construct(GarageDoor $door)
    {
        $this->door = $door;
    }

    public function execute(): void
    {
        $this->door->up();
    }
}

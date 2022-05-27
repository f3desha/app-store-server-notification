<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class LightOffCommand implements Command
{
    /**
     * @var Light $light
     */
    private Light $light;

    /**
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->off();
    }

    public function undo(): void
    {
    }
}

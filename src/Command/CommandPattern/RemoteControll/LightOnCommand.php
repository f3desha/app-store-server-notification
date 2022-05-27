<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class LightOnCommand implements Command
{

    /**
     * @var Light $light
     */
    private Light $light;

    /**
     * @var int $prevState
     */
    private int $prevState;

    /**
     * @param Light $light
     */
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->prevState = $this->light->getState();
        $this->light->on();
    }

    public function undo(): void
    {
        switch ($this->prevState) {
            case Light::ON:
                $this->light->off();
                break;
            case Light::OFF:
                $this->light->off();
                break;
        }
    }
}

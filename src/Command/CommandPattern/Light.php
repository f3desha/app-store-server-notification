<?php

namespace OOP\App\Command\CommandPattern;

class Light
{
    public function on(): void
    {
        echo "Light is on";
    }

    public function off(): void
    {
        echo "Light is off";
    }
}

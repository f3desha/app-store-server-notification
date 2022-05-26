<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class CeilingFan
{
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function on(): void
    {
        echo "$this->name ceiling fan is on\n";
    }

    public function off(): void
    {
        echo "$this->name ceiling fan is off\n";
    }
}

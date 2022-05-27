<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class Light
{

    const ON = 1;
    const OFF = 0;
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var int $state
     */
    private int $state;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->state = self::OFF;
    }

    public function on(): void
    {
        $this->state = self::ON;
        echo "$this->name light is on\n";
    }

    public function off(): void
    {
        $this->state = self::OFF;
        echo "$this->name light is off\n";
    }

    public function getState(): int
    {
        return $this->state;
    }
}

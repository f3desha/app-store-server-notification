<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class CeilingFan
{
    /**
     * @var string $name
     */
    private string $name;

    const HIGH = 3;
    const MEDIUM = 2;
    const LOW = 1;
    const OFF = 0;

    /**
     * @var int $speed
     */
    private int $speed;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->speed = self::OFF;
    }

    public function high(): void
    {
        $this->speed = self::HIGH;
        echo "Fan speed is high\n";
    }

    public function medium(): void
    {
        $this->speed = self::MEDIUM;
        echo "Fan speed is medium\n";
    }

    public function low(): void
    {
        $this->speed = self::LOW;
        echo "Fan speed is low\n";
    }

    public function off(): void
    {
        $this->speed = self::OFF;
        echo "Fan is off\n";
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }
}

<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class Stereo
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
        echo "$this->name stereo is on\n";
    }

    public function off(): void
    {
        echo "$this->name stereo is off\n";
    }

    public function setCd(): void
    {
        echo "CD mode is on\n";
    }

    public function setDvd(): void
    {
        echo "DVD mode is on\n";
    }

    public function setRadio(): void
    {
        echo "Radio mode is on\n";
    }

    public function setVolume(int $level): void
    {
        echo "Volume level is $level\n";
    }
}

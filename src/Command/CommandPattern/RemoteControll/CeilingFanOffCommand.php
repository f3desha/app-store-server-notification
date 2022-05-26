<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class CeilingFanOffCommand implements Command
{

    /**
     * @var CeilingFan $fan
     */
    private CeilingFan $fan;

    /**
     * @param CeilingFan $fan
     */
    public function __construct(CeilingFan $fan)
    {
        $this->fan = $fan;
    }

    public function execute(): void
    {
        $this->fan->off();
    }
}

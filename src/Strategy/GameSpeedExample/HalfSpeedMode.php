<?php

namespace OOP\App\Strategy\GameSpeedExample;

class HalfSpeedMode implements SpeedMode
{
    public function proceedGame(): void
    {
        echo "Half speed\n";
    }
}

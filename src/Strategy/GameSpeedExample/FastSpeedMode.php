<?php

namespace OOP\App\Strategy\GameSpeedExample;

class FastSpeedMode implements SpeedMode
{
    public function proceedGame(): void
    {
        echo "Fast speed\n";
    }

}

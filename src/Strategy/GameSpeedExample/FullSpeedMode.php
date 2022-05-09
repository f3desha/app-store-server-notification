<?php

namespace OOP\App\Strategy\GameSpeedExample;

class FullSpeedMode implements SpeedMode
{
    public function proceedGame(): void
    {
        echo "Normal speed\n";
    }
}

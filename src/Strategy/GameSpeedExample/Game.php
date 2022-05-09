<?php

namespace OOP\App\Strategy\GameSpeedExample;

class Game
{
    /**
     * @var SpeedMode
     */
    private SpeedMode $speedStrategy;

    public function setSpeedStrategy(SpeedMode $speedMode): void
    {
        $this->speedStrategy = $speedMode;
    }

    public function resumeGame(): void
    {
        $this->speedStrategy->proceedGame();
    }
}

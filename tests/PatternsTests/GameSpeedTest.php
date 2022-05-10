<?php
namespace PatternsTests;

use OOP\App\Strategy\GameSpeedExample\FastSpeedMode;
use OOP\App\Strategy\GameSpeedExample\FullSpeedMode;
use OOP\App\Strategy\GameSpeedExample\Game;
use OOP\App\Strategy\GameSpeedExample\HalfSpeedMode;
use PHPUnit\Framework\TestCase;

class GameSpeedTest extends TestCase
{
    public function testWatcher()
    {
        $game = new Game();
        $game->setSpeedStrategy(new FullSpeedMode());
        $game->resumeGame();
        $game->setSpeedStrategy(new HalfSpeedMode());
        $game->resumeGame();
        $game->setSpeedStrategy(new FastSpeedMode());
        $game->resumeGame();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }
}

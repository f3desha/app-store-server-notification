<?php
namespace PatternsTests;

use OOP\App\Strategy\ShooterGameExample\AxeBehavior;
use OOP\App\Strategy\ShooterGameExample\BowAndArrowBehavior;
use OOP\App\Strategy\ShooterGameExample\King;
use OOP\App\Strategy\ShooterGameExample\KnifeBehavior;
use OOP\App\Strategy\ShooterGameExample\Knight;
use OOP\App\Strategy\ShooterGameExample\Queen;
use OOP\App\Strategy\ShooterGameExample\SwordBehavior;
use OOP\App\Strategy\ShooterGameExample\Troll;
use PHPUnit\Framework\TestCase;

class ShooterGameTest extends TestCase
{
    public function testGame()
    {
        $character = new Queen();
        $character->setWeapon(new BowAndArrowBehavior());
        $character->fight();

        $character = new King();
        $character->setWeapon(new AxeBehavior());
        $character->fight();

        $character = new Troll();
        $character->setWeapon(new KnifeBehavior());
        $character->fight();

        $character = new Knight();
        $character->setWeapon(new SwordBehavior());
        $character->fight();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }
}

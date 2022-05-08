<?php
namespace OOP\Tests;

use OOP\App\ShooterGameExample\Behavior\AxeBehavior;
use OOP\App\ShooterGameExample\Behavior\BowAndArrowBehavior;
use OOP\App\ShooterGameExample\Behavior\KnifeBehavior;
use OOP\App\ShooterGameExample\Behavior\SwordBehavior;
use OOP\App\ShooterGameExample\Characters\King;
use OOP\App\ShooterGameExample\Characters\Knight;
use OOP\App\ShooterGameExample\Characters\Queen;
use OOP\App\ShooterGameExample\Characters\Troll;
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

        $this->assertSame(0, 0);
    }
}

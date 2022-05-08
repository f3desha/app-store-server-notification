<?php
namespace OOP\Tests;

use OOP\App\ShooterGameExample\AxeBehavior;
use OOP\App\ShooterGameExample\BowAndArrowBehavior;
use OOP\App\ShooterGameExample\King;
use OOP\App\ShooterGameExample\KnifeBehavior;
use OOP\App\ShooterGameExample\Knight;
use OOP\App\ShooterGameExample\Queen;
use OOP\App\ShooterGameExample\SwordBehavior;
use OOP\App\ShooterGameExample\Troll;
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

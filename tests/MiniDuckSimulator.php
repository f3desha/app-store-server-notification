<?php
namespace OOP\Tests;

use PHPUnit\Framework\TestCase;

class MiniDuckSimulator extends TestCase
{
    public function testMallardDuck()
    {
        $mallardDuck = new \OOP\App\DuckExample\Ducks\MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();

        $modelDuck = new \OOP\App\DuckExample\Ducks\ModelDuck();
        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new \OOP\App\DuckExample\Behavior\RocketFly());
        $modelDuck->performFly();

        $animal = new \OOP\App\AnimalExample\Animals\Dog();
        $animal->giveAVoice();

        $this->assertSame(0, 0);
    }
}

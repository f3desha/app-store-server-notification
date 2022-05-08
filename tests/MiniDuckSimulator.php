<?php
namespace OOP\Tests;

use PHPUnit\Framework\TestCase;
use OOP\App\DuckExample\Ducks\MallardDuck;
use OOP\App\DuckExample\Ducks\ModelDuck;
use OOP\App\DuckExample\Behavior\RocketFly;
use OOP\App\AnimalExample\Animals\Dog;

class MiniDuckSimulator extends TestCase
{
    public function testMallardDuck()
    {
        $mallardDuck = new MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();

        $modelDuck = new ModelDuck();
        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new RocketFly());
        $modelDuck->performFly();

        $animal = new Dog();
        $animal->giveAVoice();

        $this->assertSame(0, 0);
    }
}

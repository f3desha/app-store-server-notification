<?php
namespace OOP\Tests;

use OOP\App\Strategy\AnimalExample\Animals\Dog;
use OOP\App\Strategy\DuckExample\Behavior\RocketFly;
use OOP\App\Strategy\DuckExample\Behavior\Squeak;
use OOP\App\Strategy\DuckExample\Ducks\MallardDuck;
use OOP\App\Strategy\DuckExample\Ducks\Manok;
use OOP\App\Strategy\DuckExample\Ducks\ModelDuck;
use PHPUnit\Framework\TestCase;

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

        $manok = new Manok();
        $manok->display();
        $manok->performQuack();
        $manok->setQuackBehavior(new Squeak());
        $manok->performQuack();

        $animal = new Dog();
        $animal->giveAVoice();

        $this->assertSame(0, 0);
    }
}

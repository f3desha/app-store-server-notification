<?php

use OOP\App\DuckExample\Ducks\MallardDuck;
use PHPUnit\Framework\TestCase;

class MiniDuckSimulator extends TestCase
{
    public function testMallardDuck()
    {
        $mallardDuck = new MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();

        $modelDuck = new \OOP\App\DuckExample\Ducks\ModelDuck();
        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new \OOP\App\DuckExample\Behavior\RocketFly());
        $modelDuck->performFly();

        $this->assertSame(0, 0);
    }
}
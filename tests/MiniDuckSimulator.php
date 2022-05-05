<?php

use OOP\App\DuckExample\MallardDuck;
use PHPUnit\Framework\TestCase;

class MiniDuckSimulator extends TestCase
{
    public function testMallardDuck()
    {
        $mallardDuck = new MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();
        $this->assertSame(0, 0);
    }
}
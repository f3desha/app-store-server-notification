<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\FlyBehavior;
use OOP\App\DuckExample\Behavior\QuackBehavior;

abstract class Duck
{
    protected FlyBehavior $flyBehavior;
    protected QuackBehavior $quackBehavior;

    public function swim()
    {
        echo 'Swimming';
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    abstract public function display();
}
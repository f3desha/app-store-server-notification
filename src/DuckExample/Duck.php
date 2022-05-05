<?php

namespace OOP\App\DuckExample;

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
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

    /**
     * @param FlyBehavior $flyBehavior
     */
    public function setFlyBehavior(FlyBehavior $flyBehavior): void
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
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
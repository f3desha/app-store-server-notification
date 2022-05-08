<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\Quack;
use OOP\App\DuckExample\Behavior\QuackBehavior;

class Manok
{
    private QuackBehavior $quackBehavior;

    public function __construct()
    {
        $this->quackBehavior = new Quack();
    }

    public function display(): void
    {
        echo "This is Manok\n";
    }

    /**
     * @param QuackBehavior $quackBehavior
     */
    public function setQuackBehavior(QuackBehavior $quackBehavior): void
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function performQuack(): void
    {
        $this->quackBehavior->quack();
    }
}

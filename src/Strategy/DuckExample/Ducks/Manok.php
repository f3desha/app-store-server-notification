<?php

namespace OOP\App\Strategy\DuckExample\Ducks;

use OOP\App\Strategy\DuckExample\Behavior\Quack;
use OOP\App\Strategy\DuckExample\Behavior\QuackBehavior;

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

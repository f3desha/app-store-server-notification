<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\FlyNoWay;
use OOP\App\DuckExample\Behavior\Quack;

class ModelDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();

    }

    public function display()
    {
        echo "I'm a model duck!\n";
    }
}
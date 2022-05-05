<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\FlyWithWings;
use OOP\App\DuckExample\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->setQuackBehavior(new Quack());
        $this->setFlyBehavior(new FlywithWings());
    }


    public function display()
    {
        echo "I'm Mallard Duck\n";
    }
}
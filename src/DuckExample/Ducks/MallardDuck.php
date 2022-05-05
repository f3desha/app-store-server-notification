<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\FlyWithWings;
use OOP\App\DuckExample\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }


    public function display()
    {
        echo "I'm Mallard Duck\n";
    }
}
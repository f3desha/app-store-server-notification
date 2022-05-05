<?php

namespace OOP\App\DuckExample\Ducks;

use OOP\App\DuckExample\Behavior\FlyWithWings;
use OOP\App\DuckExample\Behavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlywithWings();
        $this->quackBehavior = new Quack();
    }


    public function display()
    {
        echo "I'm Mallard Duck\n";
    }
}
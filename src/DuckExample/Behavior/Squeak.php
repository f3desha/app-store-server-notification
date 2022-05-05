<?php

namespace OOP\App\DuckExample\Behavior;

class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "Pi Pi!\n";
    }
}
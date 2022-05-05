<?php

namespace OOP\App\DuckExample\Behavior;

class Quack implements QuackBehavior
{

    public function quack() : void
    {
        echo "Krya\n";
    }
}
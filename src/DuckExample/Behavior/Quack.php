<?php

namespace OOP\App\DuckExample\Behavior;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "Krya\n";
    }
}
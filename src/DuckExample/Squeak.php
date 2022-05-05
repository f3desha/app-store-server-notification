<?php

namespace OOP\App\DuckExample;

class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "Pi Pi!\n";
    }
}
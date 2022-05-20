<?php

namespace OOP\App\Strategy\DuckExample\Behavior;

class Squeak implements QuackBehavior
{

    public function quack(): void
    {
        echo "Pi Pi!\n";
    }
}

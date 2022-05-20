<?php

namespace OOP\App\Strategy\DuckExample\Behavior;

class Quack implements QuackBehavior
{

    public function quack(): void
    {
        echo "Krya\n";
    }
}

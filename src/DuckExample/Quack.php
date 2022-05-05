<?php

namespace OOP\App\DuckExample;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "Krya\n";
    }
}
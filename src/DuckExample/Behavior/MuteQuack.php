<?php

namespace OOP\App\DuckExample\Behavior;

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<<SILENCE>>\n";
    }
}
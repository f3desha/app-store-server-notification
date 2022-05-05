<?php

namespace OOP\App\DuckExample;

class MuteQuack implements QuackBehavior
{

    public function quack()
    {
        echo "<<SILENCE>>";
    }
}
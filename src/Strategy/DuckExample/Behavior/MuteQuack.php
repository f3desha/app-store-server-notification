<?php

namespace OOP\App\Strategy\DuckExample\Behavior;

class MuteQuack implements QuackBehavior
{

    public function quack(): void
    {
        echo "<<SILENCE>>\n";
    }
}

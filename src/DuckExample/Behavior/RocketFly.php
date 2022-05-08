<?php

namespace OOP\App\DuckExample\Behavior;

class RocketFly implements FlyBehavior
{

    public function fly() : void
    {
        echo "Fly on rocket force!\n";
    }
}

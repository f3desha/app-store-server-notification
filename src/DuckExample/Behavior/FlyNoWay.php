<?php

namespace OOP\App\DuckExample\Behavior;

class FlyNoWay implements FlyBehavior
{

    public function fly() : void
    {
        echo "<<NOFLY>>\n";
    }
}

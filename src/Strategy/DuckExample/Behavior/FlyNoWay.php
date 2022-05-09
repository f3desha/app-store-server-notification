<?php

namespace OOP\App\Strategy\DuckExample\Behavior;

class FlyNoWay implements FlyBehavior
{

    public function fly() : void
    {
        echo "<<NOFLY>>\n";
    }
}

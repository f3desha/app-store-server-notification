<?php

namespace OOP\App\DuckExample;

class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo "<<NOFLY>>";
    }
}
<?php

namespace OOP\App\DuckExample\Behavior;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "Fly with wings\n";
    }
}
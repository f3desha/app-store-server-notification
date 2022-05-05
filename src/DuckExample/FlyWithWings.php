<?php

namespace OOP\App\DuckExample;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "Fly with wings\n";
    }
}
<?php

namespace OOP\App\Strategy\DuckExample\Behavior;

class FlyWithWings implements FlyBehavior
{

    public function fly(): void
    {
        echo "Fly with wings\n";
    }
}

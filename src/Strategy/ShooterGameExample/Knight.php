<?php

namespace OOP\App\Strategy\ShooterGameExample;

class Knight extends Character
{

    public function fight(): void
    {
        echo "I'm a Knight: \n";
        $this->weaponBehavior->useWeapon();
    }
}

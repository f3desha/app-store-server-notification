<?php

namespace OOP\App\Strategy\ShooterGameExample;

class Queen extends Character
{
    public function fight(): void
    {
        echo "I'm a Queen: \n";
        $this->weaponBehavior->useWeapon();
    }
}

<?php

namespace OOP\App\ShooterGameExample;

class Queen extends Character
{
    public function fight(): void
    {
        echo "I'm a Queen: \n";
        $this->weaponBehavior->useWeapon();
    }
}

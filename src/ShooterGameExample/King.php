<?php

namespace OOP\App\ShooterGameExample;

class King extends Character
{

    public function fight(): void
    {
        echo "I'm a King: \n";
        $this->weaponBehavior->useWeapon();
    }
}

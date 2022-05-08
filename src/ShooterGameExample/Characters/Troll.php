<?php

namespace OOP\App\ShooterGameExample\Characters;

class Troll extends Character
{

    public function fight(): void
    {
        echo "I'm a Troll: \n";
        $this->weaponBehavior->useWeapon();
    }
}

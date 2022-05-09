<?php

namespace OOP\App\Strategy\ShooterGameExample;

class Troll extends Character
{

    public function fight(): void
    {
        echo "I'm a Troll: \n";
        $this->weaponBehavior->useWeapon();
    }
}

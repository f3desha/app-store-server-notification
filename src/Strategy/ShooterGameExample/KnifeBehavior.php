<?php

namespace OOP\App\Strategy\ShooterGameExample;

class KnifeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Knife!\n";
    }
}

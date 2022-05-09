<?php

namespace OOP\App\Strategy\ShooterGameExample;

class SwordBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Sword!\n";
    }
}

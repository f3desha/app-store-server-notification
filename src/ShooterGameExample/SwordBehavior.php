<?php

namespace OOP\App\ShooterGameExample;

class SwordBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Sword!\n";
    }
}

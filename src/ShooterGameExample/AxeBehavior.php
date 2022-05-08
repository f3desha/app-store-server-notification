<?php

namespace OOP\App\ShooterGameExample;

class AxeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Axe!\n";
    }
}

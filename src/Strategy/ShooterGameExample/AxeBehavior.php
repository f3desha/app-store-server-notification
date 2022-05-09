<?php

namespace OOP\App\Strategy\ShooterGameExample;

class AxeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Axe!\n";
    }
}

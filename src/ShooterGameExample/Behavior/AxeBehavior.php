<?php

namespace OOP\App\ShooterGameExample\Behavior;

class AxeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Axe!\n";
    }
}

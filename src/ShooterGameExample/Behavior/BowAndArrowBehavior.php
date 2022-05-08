<?php

namespace OOP\App\ShooterGameExample\Behavior;

class BowAndArrowBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Bow!\n";
    }
}

<?php

namespace OOP\App\ShooterGameExample;

class BowAndArrowBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Bow!\n";
    }
}

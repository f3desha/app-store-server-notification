<?php

namespace OOP\App\ShooterGameExample\Behavior;

class KnifeBehavior implements WeaponBehavior
{

    public function useWeapon(): void
    {
        echo "Hit with Knife!\n";
    }
}

<?php

namespace OOP\App\ShooterGameExample\Characters;

use OOP\App\ShooterGameExample\Behavior\WeaponBehavior;

abstract class Character
{

    protected WeaponBehavior $weaponBehavior;

    abstract public function fight(): void;

    /**
     * @param WeaponBehavior $weaponBehavior
     */
    public function setWeapon(WeaponBehavior $weaponBehavior): void
    {
        $this->weaponBehavior = $weaponBehavior;
    }
}

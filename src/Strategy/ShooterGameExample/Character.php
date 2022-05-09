<?php

namespace OOP\App\Strategy\ShooterGameExample;

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

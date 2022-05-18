<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample\Amunition;

interface TrooperAmunitionFactory
{
    public function createMeleeWeapon(): Weapon;
    public function createRangeWeapon(): Weapon;
    public function createLightArmor(): Armor;
    public function createHeavyArmor(): Armor;
}

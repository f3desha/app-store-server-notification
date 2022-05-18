<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample\Amunition;

class AtreidesAmunitionFactory implements TrooperAmunitionFactory
{
    public function createMeleeWeapon(): Weapon
    {
        return new MagmaSword();
    }

    public function createRangeWeapon(): Weapon
    {
        return new CrystalBow();
    }

    public function createLightArmor(): Armor
    {
        return new DestinyShirt();
    }

    public function createHeavyArmor(): Armor
    {
        return new DestinyShirt();
    }
}

<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample\Amunition;

class FreemanAmunitionFactory implements TrooperAmunitionFactory
{
    public function createMeleeWeapon(): Weapon
    {
        return new DesertKnife();
    }

    public function createRangeWeapon(): Weapon
    {
        return new RiffleAK74();
    }

    public function createLightArmor(): Armor
    {
        return new LightArmorGD28();
    }

    public function createHeavyArmor(): Armor
    {
        return new GoldenPlates();
    }
}

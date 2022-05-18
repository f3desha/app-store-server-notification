<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\TrooperAmunitionFactory;

class RangeTrooper extends Trooper
{

    public function getClothes(): void
    {
        $this->weapon = $this->trooperAmunitionFactory->createRangeWeapon();
        $this->armor = $this->trooperAmunitionFactory->createLightArmor();
    }
}

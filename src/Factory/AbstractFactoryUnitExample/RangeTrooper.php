<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

class RangeTrooper extends Trooper
{

    public function getClothes(): void
    {
        $this->weapon = $this->trooperAmunitionFactory->createRangeWeapon();
        $this->armor = $this->trooperAmunitionFactory->createLightArmor();
    }
}

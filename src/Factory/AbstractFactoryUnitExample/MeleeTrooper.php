<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\TrooperAmunitionFactory;

class MeleeTrooper extends Trooper
{

    public function getClothes(): void
    {
        $this->weapon = $this->trooperAmunitionFactory->createMeleeWeapon();
        $this->armor = $this->trooperAmunitionFactory->createHeavyArmor();
    }
}

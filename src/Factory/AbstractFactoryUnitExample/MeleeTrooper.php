<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

class MeleeTrooper extends Trooper
{

    public function getClothes(): void
    {
        $this->weapon = $this->trooperAmunitionFactory->createMeleeWeapon();
        $this->armor = $this->trooperAmunitionFactory->createHeavyArmor();
    }
}

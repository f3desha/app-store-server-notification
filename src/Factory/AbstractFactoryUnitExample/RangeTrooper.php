<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\TrooperAmunitionFactory;

class RangeTrooper extends Trooper
{
    private TrooperAmunitionFactory $trooperAmunitionFactory;

    /**
     * @param TrooperAmunitionFactory $trooperAmunitionFactory
     */
    public function __construct(TrooperAmunitionFactory $trooperAmunitionFactory)
    {
        $this->trooperAmunitionFactory = $trooperAmunitionFactory;
    }

    public function getClothes(): void
    {
        $this->weapon = $this->trooperAmunitionFactory->createRangeWeapon();
        $this->armor = $this->trooperAmunitionFactory->createLightArmor();
    }
}

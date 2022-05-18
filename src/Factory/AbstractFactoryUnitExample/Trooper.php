<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\Armor;
use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\Weapon;

abstract class Trooper
{
    protected Weapon $weapon;

    protected Armor $armor;

    protected string $name;

    abstract public function getClothes(): void;

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function showStats(): string
    {
        return "$this->name with weapon {$this->weapon->getName()} and armor {$this->armor->getName()}\n";
    }
}

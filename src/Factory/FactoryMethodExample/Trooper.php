<?php

namespace OOP\App\Factory\FactoryMethodExample;

abstract class Trooper
{
    protected string $name;
    /**
     * @var int
     */
    protected int $damage = 10;

    /**
     * @var int
     */
    protected int $hitPoints = 100;

    public function takeWeapon(): void
    {
        echo "Trooper taking the weapon...\n";
    }

    public function takeArmor(): void
    {
        echo "Trooper taking the armor...\n";
    }

    public function showStats(): void
    {
        echo "$this->name: Damage is $this->damage, HitPoints is $this->hitPoints\n";
    }

}

<?php

namespace OOP\App\Factory\FactoryMethodExample;

abstract class Barack
{
    public function orderTrooper(string $type): Trooper
    {
        $trooper = $this->createTrooper($type);
        $trooper->takeWeapon();
        $trooper->takeArmor();
        return $trooper;
    }

    abstract protected function createTrooper(string $type): Trooper;
}

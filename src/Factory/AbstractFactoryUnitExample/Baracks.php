<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

abstract class Baracks
{
    public function orderTrooper(string $type): Trooper
    {
        $trooper = $this->createTrooper($type);
        $trooper->getClothes();
        return $trooper;
    }

    abstract public function createTrooper(string $type): Trooper;
}

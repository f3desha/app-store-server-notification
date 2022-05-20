<?php

namespace OOP\App\Factory\AbstractCarFactory;

abstract class CarStore
{
    public function orderCar(string $name): Car
    {
        $car = $this->createCar($name);
        $car->assemble();
        return $car;
    }

    abstract public function createCar(string $name): Car;
}

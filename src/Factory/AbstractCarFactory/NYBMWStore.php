<?php

namespace OOP\App\Factory\AbstractCarFactory;

use Error;

class NYBMWStore extends CarStore
{

    public function createCar(string $name): Car
    {
        $assembly = new NYBMWPartsAssembly();

        switch ($name) {
            case 'c300':
                $car = new BMWC300($assembly);
                $car->setName('BMW C300');
                break;
            default:
                throw new Error('Not found...');
        }
        return $car;
    }
}

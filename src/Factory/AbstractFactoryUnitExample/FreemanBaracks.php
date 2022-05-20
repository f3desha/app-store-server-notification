<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use Error;
use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\FreemanAmunitionFactory;

class FreemanBaracks extends Baracks
{
    public function createTrooper(string $type): Trooper
    {
        $freemanAmunitionFactory = new FreemanAmunitionFactory();

        switch ($type) {
            case 'melee':
                $trooper = new MeleeTrooper($freemanAmunitionFactory);
                $trooper->setName('Freeman Melee Trooper');
                break;
            case 'range':
                $trooper = new RangeTrooper($freemanAmunitionFactory);
                $trooper->setName('Freeman Range Trooper');
                break;
            default:
                throw new Error('Not found');
        }
        return $trooper;
    }
}

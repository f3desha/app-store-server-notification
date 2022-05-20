<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample;

use Error;
use OOP\App\Factory\AbstractFactoryUnitExample\Amunition\AtreidesAmunitionFactory;

class AtreidesBaracks extends Baracks
{
    public function createTrooper(string $type): Trooper
    {
        $atreidesAmunitionFactory = new AtreidesAmunitionFactory();

        switch ($type) {
            case 'melee':
                $trooper = new MeleeTrooper($atreidesAmunitionFactory);
                $trooper->setName('Atreides Melee Trooper');
                break;
            case 'range':
                $trooper = new RangeTrooper($atreidesAmunitionFactory);
                $trooper->setName('Atreides Range Trooper');
                break;
            default:
                throw new Error('Not found...');
        }
        return $trooper;
    }
}

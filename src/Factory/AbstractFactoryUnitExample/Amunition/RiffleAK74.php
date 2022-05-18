<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample\Amunition;

class RiffleAK74 extends Weapon
{
    public function __construct()
    {
        $this->name = 'AK74 Riffle';
    }
}

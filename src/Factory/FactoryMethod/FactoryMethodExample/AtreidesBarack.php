<?php

namespace OOP\App\Factory\FactoryMethod\FactoryMethodExample;

use Error;

class AtreidesBarack extends Barack
{
    protected function createTrooper(string $type): Trooper
    {
        return match ($type) {
            'melee' => new AtreidesMeleeTrooper(),
            'range' => new AtreidesRangeTrooper(),
            default => throw new Error('Not found...')
        };
    }
}

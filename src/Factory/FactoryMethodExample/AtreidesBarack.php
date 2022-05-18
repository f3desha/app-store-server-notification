<?php

namespace OOP\App\Factory\FactoryMethodExample;

class AtreidesBarack extends Barack
{
    protected function createTrooper(string $type): Trooper
    {
        return match ($type) {
            'melee' => new AtreidesMeleeTrooper(),
            'range' => new AtreidesRangeTrooper(),
            default => throw new \Error('Not found...')
        };
    }
}
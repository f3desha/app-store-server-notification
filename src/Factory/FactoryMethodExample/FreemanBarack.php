<?php

namespace OOP\App\Factory\FactoryMethodExample;

class FreemanBarack extends Barack
{
    protected function createTrooper(string $type): Trooper
    {
        return match ($type) {
            'melee' => new FreemanMeleeTrooper(),
            'range' => new FreemanRangeTrooper(),
            default => throw new \Error('Not found...')
        };
    }
}

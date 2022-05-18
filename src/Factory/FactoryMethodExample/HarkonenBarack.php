<?php

namespace OOP\App\Factory\FactoryMethodExample;

class HarkonenBarack extends Barack
{
    protected function createTrooper(string $type): Trooper
    {
        return match ($type) {
            'melee' => new HarkonenMeleeTrooper(),
            'range' => new HarkonenRangeTrooper(),
            default => throw new \Error('Not found...')
        };
    }
}

<?php

namespace OOP\App\Factory\AbstractCarFactory;

use Error;

class StoreDispatcher
{
    public function create(string $type): CarStore
    {
        return match ($type) {
            'NY' => new NYBMWStore(),
            'Berlin' => new BerlinBMWStore(),
            default => throw new Error("Store not found..."),
        };
    }
}

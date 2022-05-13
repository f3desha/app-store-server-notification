<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class SimplePizzaFactory
{
    public function create(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
        };
    }
}

<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return Pizza
     */
    public function create(string $type): Pizza
    {
        return match ($type) {
            'cheese' => new CheesePizza(),
        };
    }
}

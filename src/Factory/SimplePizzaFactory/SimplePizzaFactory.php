<?php

namespace OOP\App\Factory\SimplePizzaFactory;

use Error;

class SimplePizzaFactory
{
    /**
     * @param string $type
     * @return Pizza
     */
    public function create(string $type): Pizza
    {
        return match ($type) {
            'cheese'        => new CheesePizza(),
            'veggie'        => new VeggiePizza(),
            'clam'          => new ClamPizza(),
            'pepperoni'     => new PepperoniPizza(),
            default         => throw new Error("Pizza not found..."),
        };
    }
}

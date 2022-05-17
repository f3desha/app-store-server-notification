<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

use Error;

class NYStylePizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'pepperoni'        => new NYStylePepperoniPizza(),
            'cheese'           => new NYStyleCheesePizza(),
            default         => throw new Error("Pizza not found..."),
        };
    }
}

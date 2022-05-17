<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

use Error;

class CaliforniaStylePizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'pepperoni'        => new CaliforniaStylePepperoniPizza(),
            'cheese'           => new CaliforniaStyleCheesePizza(),
            default         => throw new Error("Pizza not found..."),
        };
    }
}

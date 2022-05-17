<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

use Error;

class ChicagoStylePizzaStore extends PizzaStore
{

    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'pepperoni'        => new ChicagoStylePepperoniPizza(),
            'cheese'           => new ChicagoStyleCheesePizza(),
            default         => throw new Error("Pizza not found..."),
        };
    }
}

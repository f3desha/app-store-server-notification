<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class CheesePizza extends Pizza
{

    public function __construct()
    {
        $this->name = 'Cheese Pizza';
    }
}

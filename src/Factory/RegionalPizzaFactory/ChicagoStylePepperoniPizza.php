<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Pepperoni Pizza';
    }
}

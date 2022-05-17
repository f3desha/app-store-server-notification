<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

class CaliforniaStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'California Style Pepperoni Pizza';
    }
}

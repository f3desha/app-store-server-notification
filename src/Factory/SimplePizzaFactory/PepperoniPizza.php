<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
    }
}

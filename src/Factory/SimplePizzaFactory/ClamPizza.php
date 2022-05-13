<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class ClamPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Clam Pizza';
    }
}

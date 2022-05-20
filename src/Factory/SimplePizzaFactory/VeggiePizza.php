<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
    }

    public function prepare(): void
    {
        echo "Custom way of preparing...\n";
    }
}

<?php

namespace OOP\App\TemplateMethod\StarbuzCoffee;

class Coffee extends Drink
{

    public function brew(): void
    {
        echo "Brewing the coffee...\n";
    }

    public function addCondiments(): void
    {
        echo "Adding milk and sugar...\n";
    }
}

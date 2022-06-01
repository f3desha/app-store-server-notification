<?php

namespace OOP\App\TemplateMethod\StarbuzCoffee;

class Tea extends Drink
{

    public function brew(): void
    {
        echo "Brewing the tea...\n";
    }

    public function addCondiments(): void
    {
        echo "Adding a lemon...\n";
    }
}

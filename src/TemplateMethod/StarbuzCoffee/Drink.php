<?php

namespace OOP\App\TemplateMethod\StarbuzCoffee;

abstract class Drink
{

    final public function prepare(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pushInCup();
        $this->addCondiments();
    }

    public function boilWater(): void
    {
        echo "Boiling water...\n";
    }

    abstract public function brew(): void;

    public function pushInCup(): void
    {
        echo "Taking drink into a cup...\n";
    }

    abstract public function addCondiments(): void;
}

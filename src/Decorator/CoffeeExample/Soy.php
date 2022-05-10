<?php

namespace OOP\App\Decorator\CoffeeExample;

class Soy extends CondimentDecorator
{
    public function cost(): float
    {
        return 0.15 + $this->beverage->cost();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }
}

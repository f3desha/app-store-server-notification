<?php

namespace OOP\App\Decorator\CoffeeExample;

class Whip extends CondimentDecorator
{
    public function cost(): float
    {
        return 0.10 + $this->beverage->cost();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }
}

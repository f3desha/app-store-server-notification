<?php

namespace OOP\App\Decorator\CoffeeExample;

class Whip extends CondimentDecorator
{
    public function cost(): float
    {
        $price = match ($this->getBeverageSize()) {
            BeverageSize::TALL => 0.11,
            BeverageSize::GRANDE => 0.15,
            BeverageSize::VENTI => 0.23,
        };
        return $price + $this->beverage->cost();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Whip";
    }
}

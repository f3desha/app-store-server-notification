<?php

namespace OOP\App\Decorator\CoffeeExample;

class Soy extends CondimentDecorator
{
    public function cost(): float
    {
        $price = match ($this->getBeverageSize()) {
            BeverageSize::TALL => 0.10,
            BeverageSize::GRANDE => 0.15,
            BeverageSize::VENTI => 0.20,
        };
        return $price + $this->beverage->cost();
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Soy";
    }
}

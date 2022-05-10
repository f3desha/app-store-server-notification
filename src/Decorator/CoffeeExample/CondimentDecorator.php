<?php

namespace OOP\App\Decorator\CoffeeExample;

abstract class CondimentDecorator extends Beverage
{
    /**
     * @var Beverage
     */
    protected Beverage $beverage;

    /**
     * @param Beverage $beverage
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
}

<?php

namespace OOP\App\Decorator\CoffeeExample;

abstract class Beverage
{
    /**
     * @var BeverageSize
     */
    protected BeverageSize $beverageSize;

    /**
     * @var string
     */
    protected string $description = "Unknown Beverage";

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return BeverageSize
     */
    public function getBeverageSize(): BeverageSize
    {
        return $this->beverageSize;
    }

    /**
     * @param BeverageSize $beverageSize
     */
    public function setBeverageSize(BeverageSize $beverageSize): void
    {
        $this->beverageSize = $beverageSize;
    }

    /**
     * @return float
     */
    abstract public function cost(): float;
}

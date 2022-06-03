<?php

namespace OOP\App\Iterator;

class VlavasheItem
{
    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var bool $isVegeterian
     */
    private bool $isVegeterian;

    /**
     * @var float $price
     */
    private float $price;

    /**
     * @param string $name
     * @param string $description
     * @param bool $isVegeterian
     * @param float $price
     */
    public function __construct(string $name, string $description, bool $isVegeterian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->isVegeterian = $isVegeterian;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}

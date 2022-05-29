<?php

namespace OOP\App\Factory\InternetTest;

class MyShippingMethod implements ShippingMethodInterface
{

    /**
     * @var string $name
     */
    private string $name;


    /**
     * @var array $multipliers
     */
    private array $multipliers;

    public function __construct(string $name, array $multipliers)
    {
        $this->name = $name;
        $this->multipliers = $multipliers;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getCostEstimate($miles, ProductInterface $product)
    {
        return ($this->multipliers[0] * $miles) + ($this->multipliers[1] * $product->getWeight());
    }
}

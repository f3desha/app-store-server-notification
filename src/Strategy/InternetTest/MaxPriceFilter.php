<?php

namespace OOP\App\Strategy\InternetTest;

class MaxPriceFilter implements ProductFilteringStrategy
{

    /**
     * @var float $maxPrice
     */
    private float $maxPrice;

    /**
     * @param float $maxPrice
     */
    public function __construct(float $maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * @inheritDoc
     */
    public function filter(Product $product): bool
    {
        return $product->sellingPrice && $product->sellingPrice <= $this->maxPrice;
    }
}

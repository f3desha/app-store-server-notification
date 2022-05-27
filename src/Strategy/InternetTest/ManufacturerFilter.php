<?php

namespace OOP\App\Strategy\InternetTest;

class ManufacturerFilter implements ProductFilteringStrategy
{
    /**
     * @var string $manufacturer
     */
    private string $manufacturer;

    /**
     * @param string $manufacturer
     */
    public function __construct(string $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }


    /**
     * @inheritDoc
     */
    public function filter(Product $product): bool
    {
        return $product->manufacturer === $this->manufacturer;
    }
}

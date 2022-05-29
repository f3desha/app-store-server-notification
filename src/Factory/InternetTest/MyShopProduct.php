<?php

namespace OOP\App\Factory\InternetTest;

class MyShopProduct implements ProductInterface
{

    /**
     * @var string $code
     */
    private string $code;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var float $weight
     */
    private float $weight;

    /**
     */
    public function __construct(string $code, string $description, float $weight)
    {
        $this->code = $code;
        $this->description = $description;
        $this->weight = $weight;
    }


    public function getShopProductCode()
    {
        return $this->code;
    }

    public function getShopDescription()
    {
        return $this->description;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
}

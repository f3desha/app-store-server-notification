<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule;

class PrestoItem
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
     * @var float $price
     */
    private float $price;

    /**
     * @var string $logoUrl
     */
    private string $logoUrl = 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg';

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     */
    public function __construct(string $name, string $description, float $price)
    {
        $this->name = $name;
        $this->description = $description;
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
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
}

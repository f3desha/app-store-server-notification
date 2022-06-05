<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule;

class OpencartItem
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
     * @var string $imageUrl
     */
    private string $imageUrl;

    /**
     * @var string $logoUrl
     */
    private string $logoUrl = 'https://media.istockphoto.com/photos/mountain-landscape-picture-id517188688?k=20&m=517188688&s=612x612&w=0&h=i38qBm2P-6V4vZVEaMy_TaTEaoCMkYhvLCysE7yJQ5Q=';

    /**
     * @param string $name
     * @param string $description
     * @param float $price
     * @param string $imageUrl
     */
    public function __construct(array $item)
    {
        $this->name = $item[0];
        $this->description = $item[1];
        $this->price = $item[2];
        $this->imageUrl = array_key_exists(3, $item) ? $item[3] : './resources/noimg.png';
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

    /**
     * @return string
     */
    public function getImageUrl(): mixed
    {
        return $this->imageUrl;
    }
}

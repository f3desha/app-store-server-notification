<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoItem;

class PrestoItemAdapter implements MyCatalogItem
{
    /**
     * @var PrestoItem $prestoItem
     */
    private PrestoItem $prestoItem;

    /**
     * @param PrestoItem $promItem
     */
    public function __construct(PrestoItem $promItem)
    {
        $this->prestoItem = $promItem;
    }

    public function getItemsName(): string
    {
        return $this->prestoItem->getName();
    }

    public function getItemsPrice(): float
    {
        return $this->prestoItem->getPrice();
    }

    public function getItemsShopLogo(): string
    {
        return $this->prestoItem->getLogoUrl();
    }

    public function getItemsImageUrl(): string
    {
        return $this->prestoItem->getImageUrl();
    }
}

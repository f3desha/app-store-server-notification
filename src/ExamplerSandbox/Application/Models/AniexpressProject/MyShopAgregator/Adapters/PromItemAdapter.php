<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoItem;

class PromItemAdapter implements MyCatalogItem
{
    /**
     * @var PrestoItem $promItem
     */
    private PrestoItem $promItem;

    /**
     * @param PrestoItem $promItem
     */
    public function __construct(PrestoItem $promItem)
    {
        $this->promItem = $promItem;
    }

    public function getItemsName(): string
    {
        return $this->promItem->getName();
    }

    public function getItemsPrice(): float
    {
        return $this->promItem->getPrice();
    }

    public function getItemsShopLogo(): string
    {
        return $this->promItem->getLogoUrl();
    }
}

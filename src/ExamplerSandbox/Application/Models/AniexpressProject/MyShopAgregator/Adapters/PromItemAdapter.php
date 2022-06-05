<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PromShopModule\PromItem;

class PromItemAdapter implements MyCatalogItem
{
    /**
     * @var PromItem $promItem
     */
    private PromItem $promItem;

    /**
     * @param PromItem $promItem
     */
    public function __construct(PromItem $promItem)
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

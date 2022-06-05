<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule\OpencartItem;

class OpencartItemAdapter implements MyCatalogItem
{
    /**
     * @var OpencartItem $item
     */
    private OpencartItem $item;

    /**
     * @param OpencartItem $item
     */
    public function __construct(OpencartItem $item)
    {
        $this->item = $item;
    }

    public function getItemsName(): string
    {
        return $this->item->getName();
    }

    public function getItemsPrice(): float
    {
        return $this->item->getPrice();
    }

    public function getItemsShopLogo(): string
    {
        return $this->item->getLogoUrl();
    }

    public function getItemsImageUrl(): string
    {
        return $this->item->getImageUrl();
    }
}

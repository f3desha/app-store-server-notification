<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\MyCatalogItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\PrestoItemAdapter;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\MyIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\PrestoShopItemsIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule\PrestoShop;

class MyPrestoShop implements Shop
{

    /**
     * @var PrestoShop $promShop
     */
    private PrestoShop $promShop;

    /**
     * @param PrestoShop $promShop
     */
    public function __construct(PrestoShop $promShop)
    {
        $this->promShop = $promShop;
    }


    public function getIterator(): MyIterator
    {

        return new PrestoShopItemsIterator($this->getListOfItems());
    }

    public function getListOfItems(): array
    {
        return $this->promShop->getListOfGoods();
    }

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem
    {
        return new PrestoItemAdapter($nativeItem);
    }
}

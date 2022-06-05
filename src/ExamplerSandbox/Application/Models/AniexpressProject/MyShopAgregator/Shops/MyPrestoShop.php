<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\MyCatalogItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\PromItemAdapter;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\MyIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\PromShopItemsIterator;
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

        return new PromShopItemsIterator($this->getListOfItems());
    }

    public function getListOfItems(): array
    {
        return $this->promShop->getListOfGoods();
    }

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem
    {
        return new PromItemAdapter($nativeItem);
    }
}

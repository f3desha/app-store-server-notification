<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PromShopModule;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\PromItemAdapter;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\PromShopItemsIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\MyCatalogItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\MyIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shop;

class PromShop implements Shop
{
    /**
     * @var array $listOfGoods
     */
    private array $listOfGoods;

    public function addItemToCatalog(PromItem $item): void
    {
        $this->listOfGoods[] = $item;
    }

    /**
     * @return array
     */
    public function getListOfGoods(): array
    {
        return $this->listOfGoods;
    }

    public function getIterator(): MyIterator
    {
        return new PromShopItemsIterator($this->listOfGoods);
    }

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem
    {
        return new PromItemAdapter($nativeItem);
    }


}

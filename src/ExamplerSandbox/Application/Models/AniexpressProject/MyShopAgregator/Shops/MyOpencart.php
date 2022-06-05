<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\MyCatalogItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\OpencartItemAdapter;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\MyIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\OpencartItemsIterator;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule\Opencart;

class MyOpencart implements Shop
{
    /**
     * @var Opencart $opencart
     */
    private Opencart $opencart;

    /**
     * @param Opencart $opencart
     */
    public function __construct(Opencart $opencart)
    {
        $this->opencart = $opencart;
    }

    public function getIterator(): MyIterator
    {
        return new OpencartItemsIterator($this->getListOfItems());
    }

    public function getListOfItems(): array
    {
        return $this->opencart->getAll();
    }

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem
    {
        return new OpencartItemAdapter($nativeItem);
    }
}

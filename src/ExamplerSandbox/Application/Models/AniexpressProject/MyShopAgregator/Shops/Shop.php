<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Shops;

use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Adapters\MyCatalogItem;
use OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators\MyIterator;

interface Shop
{
    public function getIterator(): MyIterator;

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem;

    public function getListOfItems(): array;
}

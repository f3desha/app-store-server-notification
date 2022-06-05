<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator;

interface Shop
{
    public function getIterator(): MyIterator;

    public function getCatalogItemAdapter($nativeItem): MyCatalogItem;
}

<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator;

interface MyCatalogItem
{
    public function getItemsName(): string;

    public function getItemsPrice(): float;

    public function getItemsShopLogo(): string;
}

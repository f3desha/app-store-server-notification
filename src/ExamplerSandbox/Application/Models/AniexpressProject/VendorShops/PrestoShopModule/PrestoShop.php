<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PrestoShopModule;

class PrestoShop
{
    /**
     * @var array $listOfGoods
     */
    private array $listOfGoods;

    public function addItemToCatalog(PrestoItem $item): void
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
}

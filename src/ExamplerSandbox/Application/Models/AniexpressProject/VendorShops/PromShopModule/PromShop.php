<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\PromShopModule;

class PromShop
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
}

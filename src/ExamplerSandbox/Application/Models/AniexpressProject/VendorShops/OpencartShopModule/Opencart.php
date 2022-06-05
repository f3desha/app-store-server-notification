<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\VendorShops\OpencartShopModule;

class Opencart
{
    /**
     * @var array $goods
     */
    private array $goods;

    public function add(OpencartItem $item): void
    {
        $this->goods[] = $item;
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->goods;
    }
}

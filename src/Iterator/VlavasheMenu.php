<?php

namespace OOP\App\Iterator;

use SplStack;

class VlavasheMenu implements Menu
{
    /**
     * @var SplStack $menu
     */
    private SplStack $menu;

    /**
     * @var string $name
     */
    private string $name = "Vlavashe's menu";

    public function __construct()
    {
        $this->menu = new SplStack();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function addToMenu(string $name, string $description, bool $isVegeterian, float $price): void
    {
        $item = new VlavasheItem($name, $description, $isVegeterian, $price);
        $this->menu->push($item);
    }

    public function getItems(): SplStack
    {
        return $this->menu;
    }

    public function getIterator(): MyIterator
    {
        return new VlavasheMenuIterator($this->menu);
    }

    public function getAdapter($item): MyMenuItemAdapter
    {
        return new VlavasheMenuItemAdapter($item);
    }
}

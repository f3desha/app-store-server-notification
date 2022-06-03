<?php

namespace OOP\App\Iterator;

use SplStack;

class VlavasheMenu implements Agregate
{
    /**
     * @var SplStack $menu
     */
    private SplStack $menu;

    public function __construct()
    {
        $this->menu = new SplStack();
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
}

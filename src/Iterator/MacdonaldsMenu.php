<?php

namespace OOP\App\Iterator;

use SplDoublyLinkedList;

class MacdonaldsMenu implements Agregate
{
    /**
     * @var SplDoublyLinkedList $menu
     */
    private SplDoublyLinkedList $menu;

    public function __construct()
    {
        $this->menu = new SplDoublyLinkedList();
    }


    public function addItem(MacFoodItem $item): void
    {
        $this->menu->push($item);
    }

    public function getIterator(): MyIterator
    {
        return new MacdonaldsMenuIterator($this->menu);
    }
}

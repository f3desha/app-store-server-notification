<?php

namespace OOP\App\Iterator;

class MacdonaldsMenu
{
    /**
     * @var \SplDoublyLinkedList $menu
     */
    private \SplDoublyLinkedList $menu;

    public function __construct()
    {
        $this->menu = new \SplDoublyLinkedList();
    }


    public function addItem($item): void
    {
        $this->menu->push($item);
    }

    public function getIterator(): MacdonaldsMenuIterator
    {
        return new MacdonaldsMenuIterator($this->menu);
    }
}

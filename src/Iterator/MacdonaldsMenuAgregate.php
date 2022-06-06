<?php

namespace OOP\App\Iterator;

use SplDoublyLinkedList;

class MacdonaldsMenuAgregate implements MenuAgregate
{
    /**
     * @var SplDoublyLinkedList $menu
     */
    private SplDoublyLinkedList $menu;

    /**
     * @var string $name
     */
    private string $name = "Macdonald's menu";

    public function __construct()
    {
        $this->menu = new SplDoublyLinkedList();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function addItem(MacFoodItem $item): void
    {
        $this->menu->push($item);
    }

    public function getIterator(): MyIterator
    {
        return new MacdonaldsMenuIterator($this->menu);
    }

    public function getAdapter($item): MyMenuItemAdapter
    {
        return new MacdonaldsMenuItemAdapter($item);
    }
}

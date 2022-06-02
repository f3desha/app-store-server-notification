<?php

namespace OOP\App\Iterator;

class KFCsMenu
{
    /**
     * @var array $menu
     */
    private array $menu;

    public function add($item): void
    {
        $this->menu[] = $item;
    }

    public function getIterator(): KFCsMenuIterator
    {
        return new KFCsMenuIterator($this->menu);
    }
}

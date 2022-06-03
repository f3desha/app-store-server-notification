<?php

namespace OOP\App\Iterator;

class KFCsMenu implements Agregate
{
    /**
     * @var array $menu
     */
    private array $menu;

    public function add($item): void
    {
        $this->menu[] = $item;
    }

    public function getIterator(): MyIterator
    {
        return new KFCsMenuIterator($this->menu);
    }
}

<?php

namespace OOP\App\Iterator;

use InvalidArgumentException;

class KFCsMenu implements Agregate
{
    /**
     * @var array $menu
     */
    private array $menu;

    public function add($item): void
    {
        if (is_array($item) && is_string($item[0]) && is_float($item[1])) {
            $this->menu[] = $item;
        } else {
            throw new InvalidArgumentException('KFC Item wrong format');
        }
    }

    public function getIterator(): MyIterator
    {
        return new KFCsMenuIterator($this->menu);
    }
}

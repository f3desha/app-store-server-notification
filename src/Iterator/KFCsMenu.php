<?php

namespace OOP\App\Iterator;

use InvalidArgumentException;

class KFCsMenu implements Menu
{
    /**
     * @var array $menu
     */
    private array $menu;

    /**
     * @var string $name
     */
    private string $name = "KFC's menu";

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

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

    public function getAdapter($item): MyMenuItemAdapter
    {
        return new KFCsMenuItemAdapter($item);
    }
}

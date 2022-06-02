<?php

namespace OOP\App\Iterator;

class KFCsMenuIterator implements MyIterator
{
    /**
     * @var array $menu
     */
    private array $menu;

    /**
     * @var int $counter
     */
    private int $counter;

    /**
     * @param array $menu
     */
    public function __construct(array $menu)
    {
        $this->menu = $menu;
        $this->counter = 0;
    }

    public function hasNext(): bool
    {
        if ($this->counter > count($this->menu) - 1) {
            return false;
        }
        return true;
    }

    public function next()
    {
        $element = $this->menu[$this->counter];
        $this->counter++;
        return $element;
    }
}

<?php

namespace OOP\App\Iterator;

use SplDoublyLinkedList;

class MacdonaldsMenuIterator implements MyIterator
{
    /**
     * @var SplDoublyLinkedList $menu
     */
    private SplDoublyLinkedList $menu;

    /**
     * @var bool $isRewinded
     */
    private bool $isRewinded;

    public function __construct(SplDoublyLinkedList $menu)
    {
        $this->menu = $menu;
        $this->isRewinded = false;
    }

    public function hasNext(): bool
    {
        if (!$this->isRewinded) {
            $this->menu->rewind();
            $this->isRewinded = true;
        }
        if (!$this->menu->valid()) {
            $this->isRewinded = false;
            return false;
        }
        return true;
    }

    public function next()
    {
        $element = $this->menu->current();
        $this->menu->next();
        return $element;
    }
}

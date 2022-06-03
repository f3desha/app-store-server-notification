<?php

namespace OOP\App\Iterator;

use SplStack;

class VlavasheMenuIterator implements MyIterator
{
    /**
     * @var SplStack $menu
     */
    private SplStack $menu;

    /**
     * @var bool $isRewinded
     */
    private bool $isRewinded;

    /**
     * @param SplStack $menu
     */
    public function __construct(SplStack $menu)
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

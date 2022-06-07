<?php

namespace OOP\App\Composite\Coffee;

use OOP\App\Iterator\MyIterator;

class MenuIterator implements MyIterator
{
    /**
     * @var MenuComponent[] $menuComponents
     */
    private array $menuComponents;

    /**
     * @var int $counter
     */
    private int $counter = 0;

    /**
     * @param MenuComponent[] $menuComponents
     */
    public function __construct(array $menuComponents)
    {
        $this->menuComponents = $menuComponents;
    }


    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->menuComponents);
    }

    public function next()
    {
        $element = $this->menuComponents[$this->counter];
        $this->counter++;
        return $element;
    }
}

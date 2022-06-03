<?php

namespace OOP\App\Iterator;

class MenusCollection implements MyIterator
{
    /**
     * @var array $menusCollection
     */
    private array $menusCollection;

    /**
     * @var int $counter
     */
    private int $counter = 0;

    /**
     * @param array $menusCollection
     */
    public function __construct(array $menusCollection)
    {
        $this->menusCollection = $menusCollection;
    }

    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->menusCollection);
    }

    public function next()
    {
        $element = $this->menusCollection[$this->counter];
        $this->counter++;
        return $element;
    }
}

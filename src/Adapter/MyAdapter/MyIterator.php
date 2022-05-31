<?php

namespace OOP\App\Adapter\MyAdapter;

class MyIterator implements MyIteratorInterface
{
    /**
     * @var array $list
     */
    private array $list;

    public function getNextElementSpec()
    {
        return array_shift($this->list);
    }

    public function addSpec($element): void
    {
        $this->list[] = $element;
    }
}

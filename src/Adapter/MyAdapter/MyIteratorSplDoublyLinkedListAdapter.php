<?php

namespace OOP\App\Adapter\MyAdapter;

use SplDoublyLinkedList;

class MyIteratorSplDoublyLinkedListAdapter implements MyIteratorInterface
{
    /**
     * @var SplDoublyLinkedList $dlList
     */
    private SplDoublyLinkedList $dlList;
    /**
     * @var int $index
     */
    private int $index = 0;

    public function __construct($list = new SplDoublyLinkedList())
    {
        if ($list && $list instanceof SplDoublyLinkedList && $list->count() > 0) {
            $this->index = $list->count() - 1;
        }
        $this->dlList = $list;
    }


    public function getNextElementSpec()
    {
        return $this->dlList->shift();
    }

    public function addSpec($element): void
    {
        $this->dlList->add($this->index++, $element);
    }
}

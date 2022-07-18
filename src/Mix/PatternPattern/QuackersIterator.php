<?php

namespace OOP\App\Mix\PatternPattern;

use OOP\App\Iterator\MyIterator;

class QuackersIterator implements MyIterator
{

    /**
     * @var array $quackers
     */
    private array $quackers;

    /**
     * @var int $counter
     */
    private int $counter = 0;

    /**
     * @param array $quackers
     */
    public function __construct(array $quackers)
    {
        $this->quackers = $quackers;
    }

    /**
     * @return bool
     */
    public function hasNext(): bool
    {
        return $this->counter <= count($this->quackers) - 1;
    }

    /**
     * @return Quackable
     */
    public function next(): Quackable
    {
        $element = $this->quackers[$this->counter];
        $this->counter++;
        return $element;
    }
}

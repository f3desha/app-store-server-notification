<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator;

class MyCatalog implements MyIterator
{
    /**
     * @var array $listOfShops
     */
    private array $listOfShops;

    /**
     * @var int $counter
     */
    private int $counter;

    /**
     * @param array $listOfShops
     */
    public function __construct(array $listOfShops)
    {
        $this->listOfShops = $listOfShops;
        $this->counter = 0;
    }

    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->listOfShops);
    }

    public function next()
    {
        $element = $this->listOfShops[$this->counter];
        $this->counter++;
        return $element;
    }
}

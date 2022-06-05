<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators;

class PromShopItemsIterator implements MyIterator
{
    /**
     * @var array $listOfGoods
     */
    private array $listOfGoods;

    /**
     * @var int $counter
     */
    private int $counter;


    /**
     * @param array $listOfGoods
     */
    public function __construct(array $listOfGoods)
    {
        $this->listOfGoods = $listOfGoods;
        $this->counter = 0;
    }


    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->listOfGoods);
    }

    public function next()
    {
        $element = $this->listOfGoods[$this->counter];
        $this->counter++;
        return $element;
    }
}

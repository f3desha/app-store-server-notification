<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators;

class OpencartItemsIterator implements MyIterator
{

    /**
     * @var array $goods
     */
    private array $goods;

    /**
     * @var int $counter
     */
    private int $counter;

    /**
     * @param array $goods
     */
    public function __construct(array $goods)
    {
        $this->goods = $goods;
        $this->counter = 0;
    }

    public function hasNext(): bool
    {
        return array_key_exists($this->counter, $this->goods);
    }

    public function next()
    {
        $element = $this->goods[$this->counter];
        $this->counter++;
        return $element;
    }
}

<?php

namespace OOP\App\ExamplerSandbox\Application\Models\AniexpressProject\MyShopAgregator\Iterators;

interface MyIterator
{
    public function hasNext(): bool;

    public function next();
}

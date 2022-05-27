<?php

namespace OOP\App\Strategy\InternetTest;

interface ProductFilteringStrategy
{
    /**
     * @param Product $product
     * @return bool
     */
    public function filter(Product $product): bool;
}

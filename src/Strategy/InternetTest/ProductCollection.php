<?php

namespace OOP\App\Strategy\InternetTest;

class ProductCollection
{
    private $products = array();

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    /**
     * @param ProductFilteringStrategy $filterStrategy
     * @return ProductCollection
     */
    public function filter(ProductFilteringStrategy $filterStrategy)
    {
        $filteredProducts = array();
        foreach ($this->products as $product) {
            if ($filterStrategy->filter($product)) {
                $filteredProducts[] = $product;
            }
        }
        return new ProductCollection($filteredProducts);
    }

    public function getProductsArray()
    {
        return $this->products;
    }
}

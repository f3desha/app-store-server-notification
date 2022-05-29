<?php

namespace OOP\App\Factory\InternetTest;

class MyShopProductFactory implements ShopFactoryInterface
{

    /**
     * @var array $productData
     */
    private array $productData;

    /**
     * @var array $shippingMethodData
     */
    private array $shippingMethodData;

    /**
     * @param array $productData
     * @param array $shippingMethodData
     */
    public function __construct(array $productData, array $shippingMethodData)
    {
        $this->productData = $productData;
        $this->shippingMethodData = $shippingMethodData;
    }

    public function createProduct($productCode)
    {
        return new MyShopProduct(
            $productCode,
            $this->productData[$productCode][0],
            $this->productData[$productCode][1]
        );
    }

    public function createShippingMethod($name)
    {
        return new MyShippingMethod($name, $this->shippingMethodData[$name]);
    }
}

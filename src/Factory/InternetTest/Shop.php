<?php

namespace OOP\App\Factory\InternetTest;

class Shop
{
    protected $shopFactory;

    public function __construct(ShopFactoryInterface $shopFactory)
    {
        $this->shopFactory = $shopFactory;
    }

    public function listProductsWithShippingCost(array $codes, $shippingMethodName, $miles)
    {
        $output = array();
        foreach ($codes as $code) {
            $product = $this->shopFactory->createProduct($code);
            $shippingMethod = $this->shopFactory->createShippingMethod($shippingMethodName);
            $output[] = $product->getShopProductCode() . ' - ' .
                $product->getShopDescription() . ' / via: ' . $shippingMethod->getName() .
                ', cost: $' . $shippingMethod->getCostEstimate($miles, $product);
        }
        return implode(PHP_EOL, $output);
    }
}

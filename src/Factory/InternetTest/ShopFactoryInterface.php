<?php

namespace OOP\App\Factory\InternetTest;

interface ShopFactoryInterface
{
    public function createProduct($productCode);

    public function createShippingMethod($name);
}

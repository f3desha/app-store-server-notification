<?php

namespace OOP\App\Factory\InternetTest;

interface ShippingMethodInterface
{
    public function getName();

    public function getCostEstimate($miles, ProductInterface $product);
}

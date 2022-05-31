<?php

namespace OOP\App\Factory\FactoryMethod\LogisticsFactory;

class Car implements Transport
{
    public function deliver(): void
    {
        echo "Deliver by road\n";
    }
}

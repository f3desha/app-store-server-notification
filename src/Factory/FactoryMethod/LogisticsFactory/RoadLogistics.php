<?php

namespace OOP\App\Factory\FactoryMethod\LogisticsFactory;

class RoadLogistics extends LogisticsFactory
{

    public function createTransport(): Transport
    {
        return new Car();
    }
}

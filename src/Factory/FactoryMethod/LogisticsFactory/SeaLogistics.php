<?php

namespace OOP\App\Factory\FactoryMethod\LogisticsFactory;

class SeaLogistics extends LogisticsFactory
{

    public function createTransport(): Transport
    {
        return new Boat();
    }
}

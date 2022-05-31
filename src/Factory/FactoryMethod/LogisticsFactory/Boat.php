<?php

namespace OOP\App\Factory\FactoryMethod\LogisticsFactory;

class Boat implements Transport
{

    public function deliver(): void
    {
        echo "Deliver by Sea\n";
    }
}

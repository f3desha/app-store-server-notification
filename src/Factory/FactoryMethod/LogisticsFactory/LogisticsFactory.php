<?php

namespace OOP\App\Factory\FactoryMethod\LogisticsFactory;

abstract class LogisticsFactory
{
    /**
     * @param string $type
     * @return LogisticsFactory
     */
    public static function defineLogistics(string $type): LogisticsFactory
    {
        return match ($type) {
            'road' => new RoadLogistics(),
            'sea' => new SeaLogistics()
        };
    }

    /**
     * @return Transport
     */
    abstract public function createTransport(): Transport;
}

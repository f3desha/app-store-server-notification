<?php

namespace OOP\App\NavigatorExample\Strategies;

class PublicTransportStrategy implements RouteStrategy
{

    public function buildRoute($pointA, $pointB)
    {
        echo "Route with a Public Transport Strategy";
    }
}
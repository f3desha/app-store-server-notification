<?php

namespace OOP\App\NavigatorExample\Strategies;

class WalkingStrategy implements RouteStrategy
{

    public function buildRoute($pointA, $pointB)
    {
        echo "Route with a Walking Strategy\n";
    }
}
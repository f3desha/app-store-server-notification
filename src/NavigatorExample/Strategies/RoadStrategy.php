<?php

namespace OOP\App\NavigatorExample\Strategies;

class RoadStrategy implements RouteStrategy
{

    public function buildRoute($pointA, $pointB)
    {
        echo "Route with Road Strategy\n";
    }
}
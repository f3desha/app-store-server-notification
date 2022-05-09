<?php

namespace OOP\App\Strategy\NavigatorExample\Strategies;

class RoadStrategy implements RouteStrategy
{

    public function buildRoute($pointA, $pointB)
    {
        echo "Route with Road Strategy\n";
    }
}

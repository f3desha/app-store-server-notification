<?php

namespace OOP\App\NavigatorExample;

use OOP\App\NavigatorExample\Strategies\RouteStrategy;

class Navigator
{

    private RouteStrategy $routeStrategy;

    /**
     * @param RouteStrategy $routeStrategy
     */
    public function setRouteStrategy(RouteStrategy $routeStrategy): void
    {
        $this->routeStrategy = $routeStrategy;
    }

    public function performRoute($pointA, $pointB)
    {
        $this->routeStrategy->buildRoute($pointA, $pointB);
    }
}

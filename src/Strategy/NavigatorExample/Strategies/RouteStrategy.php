<?php

namespace OOP\App\Strategy\NavigatorExample\Strategies;

interface RouteStrategy
{
    public function buildRoute($pointA, $pointB);
}

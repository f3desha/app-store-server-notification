<?php

namespace OOP\App\NavigatorExample\Strategies;

interface RouteStrategy
{
    public function buildRoute($pointA, $pointB);
}

<?php

namespace OOP\App\WeatherStationExample;

interface Observer
{
    public function update(float $temperature, float $humidity, float $pressure);
}

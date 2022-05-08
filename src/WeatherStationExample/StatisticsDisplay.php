<?php

namespace OOP\App\WeatherStationExample;

class StatisticsDisplay implements DisplayElement
{
    /**
     * @var float
     */
    private float $temperature;

    public function display(): void
    {
        echo "Avg temperature = {$this->temperature}\n";
    }
}

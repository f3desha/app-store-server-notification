<?php

namespace OOP\App\WeatherStationExample;

class ForecastDisplay implements DisplayElement
{


    public function display(): void
    {
        echo "Forecast: Improving weather on the way!\n";
    }
}

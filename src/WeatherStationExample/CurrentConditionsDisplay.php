<?php

namespace OOP\App\WeatherStationExample;

class CurrentConditionsDisplay implements DisplayElement
{

    /**
     * @var float
     */
    private float $temperature;

    /**
     * @var float
     */
    private float $humidity;

    public function display(): void
    {
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity\n";
    }

}

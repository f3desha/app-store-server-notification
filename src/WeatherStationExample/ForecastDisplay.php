<?php

namespace OOP\App\WeatherStationExample;

class ForecastDisplay implements Observer, DisplayElement
{
    /**
     * @var Subject
     */
    private Subject $weatherData;

    /**
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->display();
    }

    public function display(): void
    {
        echo "Forecast: Improving weather on the way!\n";
    }
}

<?php

namespace OOP\App\WeatherStationExample;

class ForecastDisplay implements DisplayElement, Observer
{
    /**
     * @var float
     */
    private float $temperature;

    /**
     * @var float
     */

    private float $humidity;
    /**
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }

    /**
     * @var Subject
     */
    private Subject $weatherData;

    public function display(): void
    {
        echo "Forecast: Improving weather on the way!\n";
    }
}

<?php

namespace OOP\App\WeatherStationExample;

class StatisticsDisplay implements DisplayElement, Observer
{
    /**
     * @var Subject
     */
    private Subject $weatherData;

    /**
     * @var float
     */
    private float $temperature;

    /**
     * @param Subject $weatherData
     */
    public function __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display(): void
    {
        echo "Avg temperature = {$this->temperature}\n";
    }

    public function update(float $temperature, float $humidity, float $pressure)
    {
        $this->temperature = $temperature;
        $this->display();
    }
}

<?php

namespace OOP\App\WeatherStationExample;

class StatisticsDisplay implements Observer, DisplayElement
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


    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->display();
    }

    public function display(): void
    {
        echo "Avg temperature = {$this->temperature}\n";
    }
}

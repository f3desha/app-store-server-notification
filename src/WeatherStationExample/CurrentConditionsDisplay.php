<?php

namespace OOP\App\WeatherStationExample;

class CurrentConditionsDisplay implements Observer, DisplayElement
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
     * @var float
     */
    private float $humidity;

    /**
     * @param Subject $weatherData
     */
    public function     __construct(Subject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->registerObserver($this);
    }

    public function display(): void
    {
        echo "Current conditions: {$this->temperature}F degrees and {$this->humidity}% humidity\n";
    }

    public function update(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->display();
    }
}

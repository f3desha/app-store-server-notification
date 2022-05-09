<?php

namespace OOP\App\WeatherStationExample;

class StatisticsDisplay implements DisplayElement, \SplObserver
{
    /**
     * @var \SplSubject
     */
    private \SplSubject $weatherData;

    /**
     * @var float
     */
    private float $temperature;

    /**
     * @param \SplSubject $weatherData
     */
    public function __construct(\SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display(): void
    {
        echo "Avg temperature = {$this->temperature}\n";
    }

    public function update(\SplSubject $weatherData): void
    {
        $this->temperature = $weatherData->getTemperature();
        $this->display();
    }
}

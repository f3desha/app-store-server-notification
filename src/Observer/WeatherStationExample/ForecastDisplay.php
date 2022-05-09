<?php

namespace OOP\App\Observer\WeatherStationExample;

use SplObserver;
use SplSubject;

class ForecastDisplay implements DisplayElement, SplObserver
{
    /**
     * @var SplSubject
     */
    private SplSubject $weatherData;

    /**
     * @var float
     */
    private float $temperature;

    /**
     * @var float
     */

    private float $humidity;
    /**
     * @param SplSubject $weatherData
     */
    public function __construct(SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    /**
     * @param SplSubject $weatherData
     * @return void
     */
    public function update(SplSubject $weatherData): void
    {
        $this->temperature = $weatherData->getTemperature();
        $this->humidity = $weatherData->getHumidity();
        $this->display();
    }

    public function display(): void
    {
        echo "Forecast: Improving weather on the way!\n";
    }
}

<?php

namespace OOP\App\Observer\WeatherStationExample;

use SplObserver;
use SplSubject;

class StatisticsDisplay implements DisplayElement, SplObserver
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
     * @param SplSubject $weatherData
     */
    public function __construct(SplSubject $weatherData)
    {
        $this->weatherData = $weatherData;
        $this->weatherData->attach($this);
    }

    public function display(): void
    {
        echo "Avg temperature = {$this->temperature}\n";
    }

    /**
     * @param SplSubject $subject
     * @return void
     */
    public function update(SplSubject $subject): void
    {
        $this->temperature = $subject->getTemperature();
        $this->display();
    }
}

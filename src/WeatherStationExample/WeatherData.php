<?php

namespace OOP\App\WeatherStationExample;

class WeatherData implements Subject
{
    /**
     * @var Observer[]
     */
    private array $observers = [];

    /**
     * @var float
     */
    private float $temperature;

    /**
     * @var float
     */
    private float $humidity;

    /**
     * @var float
     */
    private float $pressure;

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        if (in_array($o, $this->observers)) {
            $key = array_search($o, $this->observers);
            unset($this->observers[$key]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $o) {
            $o->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged(): void
    {
        $this->notifyObservers();
    }

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }
}

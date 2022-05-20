<?php

namespace OOP\App\Observer\WeatherStationExample;

use SplObserver;
use SplSubject;

class WeatherData implements SplSubject
{
    /**
     * @var SplObserver[]
     */
    private array $observers;

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

    public function setMeasurements(float $temperature, float $humidity, float $pressure): void
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->measurementsChanged();
    }

    public function measurementsChanged(): void
    {
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $o) {
            $o->update($this);
        }
    }

    public function attach(SplObserver $o): void
    {
        $this->observers[] = $o;
    }

    public function detach(SplObserver $o): void
    {
        $key = array_search($o, $this->observers);
        unset($this->observers[$key]);
    }

    /**
     * @return float
     */
    public function getTemperature(): float
    {
        return $this->temperature;
    }

    /**
     * @return float
     */
    public function getHumidity(): float
    {
        return $this->humidity;
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }
}

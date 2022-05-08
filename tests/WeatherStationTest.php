<?php
namespace OOP\Tests;

use OOP\App\WeatherStationExample\CurrentConditionsDisplay;
use OOP\App\WeatherStationExample\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherStationTest extends TestCase
{
    public function testGame()
    {
        $weatherData = new WeatherData();
        new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(23, 57, 3);

        $this->assertSame(0, 0);
    }
}

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
        $display1 = new CurrentConditionsDisplay($weatherData);

        $weatherData->setMeasurements(1, 2, 3);

        $this->assertSame(0, 0);
    }
}

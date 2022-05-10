<?php
namespace PatternsTests;

use OOP\App\Observer\WeatherStationExample\CurrentConditionsDisplay;
use OOP\App\Observer\WeatherStationExample\ForecastDisplay;
use OOP\App\Observer\WeatherStationExample\HeatIndexDisplay;
use OOP\App\Observer\WeatherStationExample\StatisticsDisplay;
use OOP\App\Observer\WeatherStationExample\WeatherData;
use PHPUnit\Framework\TestCase;

class WeatherStationTest extends TestCase
{
    public function testGame()
    {
        //Subject creation
        $weatherData = new WeatherData();

        //Observers creation
        new CurrentConditionsDisplay($weatherData);
        new StatisticsDisplay($weatherData);

        $weatherData->setMeasurements(23, 57, 3);
        $weatherData->setMeasurements(25, 37, 3);

        //Add one more observer
        new ForecastDisplay($weatherData);
        new HeatIndexDisplay($weatherData);
        $weatherData->setMeasurements(21, 58, 3);

        $this->assertSame(0, 0);
    }
}

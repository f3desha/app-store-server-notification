<?php
namespace OOP\Tests;

use OOP\App\WeatherStationExample\CurrentConditionsDisplay;
use OOP\App\WeatherStationExample\ForecastDisplay;
use OOP\App\WeatherStationExample\StatisticsDisplay;
use OOP\App\WeatherStationExample\WeatherData;
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
        $weatherData->setMeasurements(21, 58, 3);

        $this->assertSame(0, 0);
    }
}

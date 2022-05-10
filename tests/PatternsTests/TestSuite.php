<?php
namespace PatternsTests;

use OOP\App\Decorator\CoffeeExample\BeverageSize;
use OOP\App\Decorator\CoffeeExample\DarkRoast;
use OOP\App\Decorator\CoffeeExample\Espresso;
use OOP\App\Decorator\CoffeeExample\HouseBlend;
use OOP\App\Decorator\CoffeeExample\Mocha;
use OOP\App\Decorator\CoffeeExample\Soy;
use OOP\App\Decorator\CoffeeExample\Whip;
use OOP\App\Observer\StoreExample\Baker;
use OOP\App\Observer\StoreExample\Butcher;
use OOP\App\Observer\StoreExample\Store;
use OOP\App\Observer\UIExample\Button;
use OOP\App\Observer\UIExample\ConsoleInfoListener;
use OOP\App\Observer\UIExample\FileUploaderListener;
use OOP\App\Observer\WatcherExample\CssCompiler;
use OOP\App\Observer\WatcherExample\JsCompiler;
use OOP\App\Observer\WatcherExample\Watcher;
use OOP\App\Observer\WeatherStationExample\CurrentConditionsDisplay;
use OOP\App\Observer\WeatherStationExample\ForecastDisplay;
use OOP\App\Observer\WeatherStationExample\HeatIndexDisplay;
use OOP\App\Observer\WeatherStationExample\StatisticsDisplay;
use OOP\App\Observer\WeatherStationExample\WeatherData;
use OOP\App\Strategy\AnimalExample\Animals\Dog;
use OOP\App\Strategy\DuckExample\Behavior\RocketFly;
use OOP\App\Strategy\DuckExample\Behavior\Squeak;
use OOP\App\Strategy\DuckExample\Ducks\MallardDuck;
use OOP\App\Strategy\DuckExample\Ducks\Manok;
use OOP\App\Strategy\DuckExample\Ducks\ModelDuck;
use OOP\App\Strategy\GameSpeedExample\FastSpeedMode;
use OOP\App\Strategy\GameSpeedExample\FullSpeedMode;
use OOP\App\Strategy\GameSpeedExample\Game;
use OOP\App\Strategy\GameSpeedExample\HalfSpeedMode;
use OOP\App\Strategy\NavigatorExample\Navigator;
use OOP\App\Strategy\NavigatorExample\Strategies\PublicTransportStrategy;
use OOP\App\Strategy\ShooterGameExample\AxeBehavior;
use OOP\App\Strategy\ShooterGameExample\BowAndArrowBehavior;
use OOP\App\Strategy\ShooterGameExample\King;
use OOP\App\Strategy\ShooterGameExample\KnifeBehavior;
use OOP\App\Strategy\ShooterGameExample\Knight;
use OOP\App\Strategy\ShooterGameExample\Queen;
use OOP\App\Strategy\ShooterGameExample\SwordBehavior;
use OOP\App\Strategy\ShooterGameExample\Troll;
use PHPUnit\Framework\TestCase;

class TestSuite extends TestCase
{
    public function testButton()
    {
        $button = new Button();
        new FileUploaderListener($button);
        new ConsoleInfoListener($button);

        $button->press();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testCoffee()
    {

        $espresso = new Espresso();
        $mocha = new Mocha($espresso);
        $mocha->setBeverageSize(BeverageSize::VENTI);
        $soy = new Soy($mocha);
        $soy->setBeverageSize(BeverageSize::VENTI);

        echo "{$soy->getDescription()} \${$soy->cost()}\n";

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testGameSpeed()
    {
        $game = new Game();
        $game->setSpeedStrategy(new FullSpeedMode());
        $game->resumeGame();
        $game->setSpeedStrategy(new HalfSpeedMode());
        $game->resumeGame();
        $game->setSpeedStrategy(new FastSpeedMode());
        $game->resumeGame();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testMallardDuck()
    {
        $mallardDuck = new MallardDuck();
        $mallardDuck->display();
        $mallardDuck->performQuack();
        $mallardDuck->performFly();

        $modelDuck = new ModelDuck();
        $modelDuck->display();
        $modelDuck->performFly();
        $modelDuck->setFlyBehavior(new RocketFly());
        $modelDuck->performFly();

        $manOk = new Manok();
        $manOk->display();
        $manOk->performQuack();
        $manOk->setQuackBehavior(new Squeak());
        $manOk->performQuack();

        $animal = new Dog();
        $animal->giveAVoice();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testRoute()
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new PublicTransportStrategy());
        $navigator->performRoute(1, 2);

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testGame()
    {
        $character = new Queen();
        $character->setWeapon(new BowAndArrowBehavior());
        $character->fight();

        $character = new King();
        $character->setWeapon(new AxeBehavior());
        $character->fight();

        $character = new Troll();
        $character->setWeapon(new KnifeBehavior());
        $character->fight();

        $character = new Knight();
        $character->setWeapon(new SwordBehavior());
        $character->fight();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testStore()
    {
        $store = new Store();
        new Butcher($store);
        $backer = new Baker($store);

        $store->updateGoods();

        $store->removeObserver($backer);
        $store->updateGoods();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testWatcher()
    {
        $watcher = new Watcher();

        new CssCompiler($watcher);
        new JsCompiler($watcher);

        $watcher->fileChanged('/var/www/app/frontend/styles.css');
        $watcher->fileChanged('/var/www/app/frontend/app.js');
        $watcher->fileChanged('/var/www/app/frontend/jquery.js');

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testWeather()
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

        echo "===========================\n";
        $this->assertSame(0, 0);
    }
}

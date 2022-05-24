<?php

namespace Feature;

use Exception;
use OOP\App\Decorator\CoffeeExample\BeverageSize;
use OOP\App\Decorator\CoffeeExample\Espresso;
use OOP\App\Decorator\CoffeeExample\Mocha;
use OOP\App\Decorator\CoffeeExample\Soy;
use OOP\App\Decorator\DressExample\KnifeDecorator;
use OOP\App\Decorator\DressExample\SweaterDecorator;
use OOP\App\Factory\AbstractCarFactory\StoreDispatcher;
use OOP\App\Factory\AbstractFactoryExample\ChicagoPizzaStore;
use OOP\App\Factory\AbstractFactoryExample\NYPizzaStore;
use OOP\App\Factory\AbstractFactoryUnitExample\AtreidesBaracks;
use OOP\App\Factory\FactoryMethodExample\AtreidesBarack;
use OOP\App\Factory\FactoryMethodExample\FreemanBarack;
use OOP\App\Factory\SimplePizzaFactory\PizzaStore;
use OOP\App\Factory\SimplePizzaFactory\SimplePizzaFactory;
use OOP\App\Mix\SampleOne\FuckingWordInputStream;
use OOP\App\Mix\SampleOne\IOManipulator;
use OOP\App\Mix\SampleOne\LowerCaseInputStream;
use OOP\App\Mix\SampleOne\MySQLWriter;
use OOP\App\Mix\SampleOne\SimpleFileWriter;
use OOP\App\Mix\SampleOne\SimpleTextReader;
use OOP\App\Mix\SampleOne\StringInputStream;
use OOP\App\Mix\SampleOne\UpperCaseInputStream;
use OOP\App\Mix\SampleOne\ZipReader;
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
use OOP\App\Singleton\ChocolateBoiler\ChocolateBoiler;
use OOP\App\Singleton\ClassicSingleton\Singleton;
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

class PatternsTest extends TestCase
{
    public function testSimpleSingleton()
    {
        $singleton = Singleton::getInstance();
        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testSingle()
    {
        $chocInst = ChocolateBoiler::getInstance();
        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testCarAssembly(): void
    {
        $dispatcher = new StoreDispatcher();
        $store = $dispatcher->create('Berlin');
        $store->orderCar('c300');

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testDuneSecond(): void
    {
        $barracks = new AtreidesBaracks();
        $trooper = $barracks->orderTrooper('range');
        echo $trooper->showStats();

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testDune(): void
    {
        $playerOneBarack = new FreemanBarack();
        $trooper1 = $playerOneBarack->orderTrooper('range');

        $playerTwoBarack = new AtreidesBarack();
        $trooper2 = $playerTwoBarack->orderTrooper('melee');

        $trooper1->showStats();
        $trooper2->showStats();
        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testRegionalPizzaFactory(): void
    {
        $nyStore = new NYPizzaStore();
        $nyStore->orderPizza('cheese');

        $chicagoStore = new ChicagoPizzaStore();
        $chicagoStore->orderPizza('clam');

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testPizzaFactory(): void
    {
        $pizzaStore = new PizzaStore(new SimplePizzaFactory());
        $pizzaStore->orderPizza('cheese');
        $pizzaStore->orderPizza('veggie');
        $pizzaStore->orderPizza('clam');
        $pizzaStore->orderPizza('pepperoni');

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    /**
     * @throws Exception
     */
    public function testSampleOne(): void
    {
        $ext = random_int(0, 1) ? 'txt' : 'zip';
        $readerStrategy = match ($ext) {
            'txt' => new SimpleTextReader(__DIR__ . '\..\..\src\Files\SampleTextFile.txt'),
            'zip' => new ZipReader(__DIR__ . '\..\..\src\Files\ZippedText.zip'),
        };

        $ioManipulator = new IOManipulator();
        $ioManipulator->setReaderStrategy($readerStrategy);
        $text = $ioManipulator->performRead();

        $stream = new StringInputStream($text);
        $transformed = $stream->read();
        echo $transformed . "\n";

        $ext = random_int(0, 1) ? 'file' : 'mysql';
        $writerStrategy = match ($ext) {
            'file' => new SimpleFileWriter($transformed, 'path'),
            'mysql' => new MySQLWriter($transformed, 'database', 'tableName', 'field'),
        };

        $ioManipulator->setWriterStrategy($writerStrategy);
        $ioManipulator->performWrite();

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testStream(): void
    {
        $input = new UpperCaseInputStream(new FuckingWordInputStream(
            new StringInputStream('Good Game')
        ));
        echo $input->read();
        echo "\n";
        $stringInput = new LowerCaseInputStream(new FuckingWordInputStream(new StringInputStream('Huge Text')));
        echo $stringInput->read();
        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testClothes(): void
    {
        $character = new KnifeDecorator(new SweaterDecorator(new \OOP\App\Decorator\DressExample\King()));
        echo $character->getDescription();
        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testButton(): void
    {
        $button = new Button();
        new FileUploaderListener($button);
        new ConsoleInfoListener($button);

        $button->press();

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testCoffee(): void
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

    public function testGameSpeed(): void
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

    public function testMallardDuck(): void
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

    public function testRoute(): void
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new PublicTransportStrategy());
        $navigator->performRoute(1, 2);

        echo "===========================\n";
        $this->assertSame(0, 0);
    }

    public function testGame(): void
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

    public function testStore(): void
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

    public function testWatcher(): void
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

    public function testWeather(): void
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

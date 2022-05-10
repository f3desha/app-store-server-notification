<?php
namespace PatternsTests;

use OOP\App\Decorator\CoffeeExample\DarkRoast;
use OOP\App\Decorator\CoffeeExample\Espresso;
use OOP\App\Decorator\CoffeeExample\HouseBlend;
use OOP\App\Decorator\CoffeeExample\Mocha;
use OOP\App\Decorator\CoffeeExample\Soy;
use OOP\App\Decorator\CoffeeExample\Whip;
use PHPUnit\Framework\TestCase;

class CoffeeTest extends TestCase
{
    public function testCoffee()
    {
        $espresso = new Espresso();
        echo "{$espresso->getDescription()} \${$espresso->cost()}\n";

        $darkRoast = new Whip(new Mocha(new Mocha(new DarkRoast())));
        echo "{$darkRoast->getDescription()} \${$darkRoast->cost()}\n";

        $houseBlend = new Whip(new Mocha(new Soy(new HouseBlend())));
        echo "{$houseBlend->getDescription()} \${$houseBlend->cost()}\n";

        echo "===========================\n";
        $this->assertSame(0, 0);
    }
}

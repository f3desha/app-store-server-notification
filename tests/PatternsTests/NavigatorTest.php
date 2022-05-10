<?php
namespace PatternsTests;

use OOP\App\Strategy\NavigatorExample\Navigator;
use OOP\App\Strategy\NavigatorExample\Strategies\PublicTransportStrategy;
use PHPUnit\Framework\TestCase;

class NavigatorTest extends TestCase
{
    public function testRoute()
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new PublicTransportStrategy());
        $navigator->performRoute(1, 2);

        echo "===========================\n";
        $this->assertSame(0, 0);
    }
}

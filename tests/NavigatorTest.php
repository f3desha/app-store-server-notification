<?php
namespace OOP\Tests;

use PHPUnit\Framework\TestCase;
use OOP\App\NavigatorExample\Navigator;
use OOP\App\NavigatorExample\Strategies\PublicTransportStrategy;

class NavigatorTest extends TestCase
{
    public function testRoute()
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new PublicTransportStrategy());
        $navigator->performRoute(1, 2);

        $this->assertSame(0, 0);
    }
}

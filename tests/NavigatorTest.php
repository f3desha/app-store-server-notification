<?php
namespace OOP\Tests;

use PHPUnit\Framework\TestCase;

class NavigatorTest extends TestCase
{
    public function testRoute()
    {
        $navigator = new \OOP\App\NavigatorExample\Navigator();
        $navigator->setRouteStrategy(new \OOP\App\NavigatorExample\Strategies\PublicTransportStrategy());
        $navigator->performRoute(1, 2);

        $this->assertSame(0, 0);
    }
}

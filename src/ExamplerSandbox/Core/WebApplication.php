<?php

namespace OOP\App\ExamplerSandbox\Core;

use OOP\App\ExamplerSandbox\Core\Router\Router;

class WebApplication extends Application
{
    const MODE = 'web';

    /**
     * @var Router $router
     */
    private Router $router;

    protected function start(): void
    {
        $this->router = new Router($_REQUEST);
        $controller = $this->router->getController();
        $controller->invoke($this->router->getAction());
    }
}

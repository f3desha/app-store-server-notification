<?php

namespace OOP\App\ExamplerSandbox\Core\Router;

use OOP\App\ExamplerSandbox\Core\Controller\Controller;
use ReflectionClass;

class Router
{
    /**
     * @var  $request
     */
    private $request = null;

    /**
     * @param null $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function getController(): Controller
    {
        if (!isset($this->request['controller'])) {
            $this->request['controller'] = "index";
        }

        $controllerName = ucfirst($this->request['controller']);
        $className = "OOP\App\ExamplerSandbox\Application\Controllers\\" . $controllerName . "Controller";
        return (new ReflectionClass($className))->newInstance();
    }

    public function getAction(): string
    {
        if (!isset($this->request['action'])) {
            $this->request['action'] = "index";
        }
        return ucfirst($this->request['action']);
    }
}

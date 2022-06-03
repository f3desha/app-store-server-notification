<?php

namespace OOP\App\ExamplerSandbox\Core\Router;

use Exception;
use OOP\App\ExamplerSandbox\Application\Controllers\AniexpressController;
use OOP\App\ExamplerSandbox\Application\Controllers\IndexController;
use OOP\App\ExamplerSandbox\Core\Controller\Controller;

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

        return match ($this->request['controller']) {
            'index' => new IndexController(),
            'aniexpress' => new AniexpressController(),
            default => throw new Exception("Controller '{$this->request['controller']}' not found...")
        };
    }

    public function getAction(): string
    {
        if (!isset($this->request['action'])) {
            return "Index";
        }
        return strtoupper(substr($this->request['action'], 0, 1))
            . substr($this->request['action'], 1, strlen($this->request['action']));
    }
}

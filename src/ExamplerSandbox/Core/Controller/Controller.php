<?php

namespace OOP\App\ExamplerSandbox\Core\Controller;

abstract class Controller
{
    public function invoke(string $action): void
    {
        $actionName = "action" . $action;
        $this->$actionName();
    }
}

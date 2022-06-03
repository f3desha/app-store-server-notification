<?php

namespace OOP\App\ExamplerSandbox\Core\Controller;

abstract class Controller
{
    public function invoke(string $action): void
    {
        try {
            $actionName = "action" . $action;
            $this->$actionName();
        } catch (\Error $e) {
            throw new \Exception("'$action' action not found...");
        }
    }
}

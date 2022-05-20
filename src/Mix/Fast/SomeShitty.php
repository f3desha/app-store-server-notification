<?php namespace OOP\App\Mix\Fast;

use Error;

class SomeShitty
{
    public function someDirtyMethod()
    {
        try {
            $name = null;
        } catch (Error $e) {
            $e->getMessage();
        }
    }
}

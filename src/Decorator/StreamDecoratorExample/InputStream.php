<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

abstract class InputStream
{
    /**
     * @return string
     */
    abstract public function read(): string;
}
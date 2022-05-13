<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

abstract class InputStream
{
    /**
     * @var string
     */
    protected string $buffer;

    /**
     * @return string
     */
    abstract public function read(): string;
}
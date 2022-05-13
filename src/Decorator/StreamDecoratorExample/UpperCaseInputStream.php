<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class UpperCaseInputStream extends FilterInputStream
{
    /**
     * @return string
     */
    public function read(): string
    {
        return strtoupper($this->inputStream->read());
    }
}

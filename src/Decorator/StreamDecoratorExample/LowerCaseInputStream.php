<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class LowerCaseInputStream extends FilterInputStream
{
    /**
     * @return string
     */
    public function read(): string
    {
        return strtolower($this->inputStream->read());
    }
}

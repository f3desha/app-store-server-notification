<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class FuckingWordInputStream extends FilterInputStream
{

    /**
     * @return string
     */
    public function read(): string
    {
        $words = explode(' ', $this->inputStream->read());
        return implode(' fucking ', $words);
    }
}
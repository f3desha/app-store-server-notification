<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class FuckingWordInputStream extends FilterInputStream
{
    /**
     * @var InputStream
     */
    protected InputStream $inputStream;

    /**
     * @param InputStream $inputStream
     */
    public function __construct(InputStream $inputStream)
    {
        $this->inputStream = $inputStream;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        $words = explode(' ', $this->inputStream->read());
        return implode(' fucking ', $words);
    }
}
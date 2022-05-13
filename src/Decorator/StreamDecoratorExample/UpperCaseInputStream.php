<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class UpperCaseInputStream extends FilterInputStream
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
        return strtoupper($this->inputStream->read());
    }
}

<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class LowerCaseInputStream extends FilterInputStream
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
        return strtolower($this->inputStream->read());
    }
}

<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

abstract class FilterInputStream extends InputStream
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
}

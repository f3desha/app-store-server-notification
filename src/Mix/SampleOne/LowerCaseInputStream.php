<?php

namespace OOP\App\Mix\SampleOne;

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

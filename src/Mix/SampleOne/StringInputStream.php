<?php

namespace OOP\App\Mix\SampleOne;

class StringInputStream extends InputStream
{
    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->buffer = $text;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return $this->buffer;
    }
}

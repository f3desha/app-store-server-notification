<?php

namespace OOP\App\Mix\SampleOne;

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

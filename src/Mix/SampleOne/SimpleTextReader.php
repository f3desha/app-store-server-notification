<?php

namespace OOP\App\Mix\SampleOne;

class SimpleTextReader implements Reader
{
    /**
     * @var string
     */
    private string $simpleTextFilePath;

    public function __construct($filePath)
    {
        $this->simpleTextFilePath = $filePath;
    }

    public function read(): string
    {
        return file_get_contents($this->simpleTextFilePath);
    }
}

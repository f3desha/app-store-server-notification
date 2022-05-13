<?php

namespace OOP\App\Mix\SampleOne;

class SimpleTextReader implements ReaderBehavior
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

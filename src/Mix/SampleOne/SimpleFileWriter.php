<?php

namespace OOP\App\Mix\SampleOne;

class SimpleFileWriter implements Writer
{
    /**
     * @var string
     */
    private string $data;

    /**
     * @var string
     */
    private string $filePath;

    /**
     * @param string $data
     * @param string $filePath
     */
    public function __construct(string $data, string $filePath)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }


    public function write(): bool
    {
        echo "Simple File Write done\n";
        return true;
    }
}

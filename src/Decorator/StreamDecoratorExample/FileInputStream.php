<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class FileInputStream extends InputStream
{
    /**
     * @param string $fileName
     */
    public function __construct(string $fileName)
    {
        //read file and get content
        $content = file_get_contents($fileName);
        $this->buffer = $content;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return $this->buffer;
    }
}

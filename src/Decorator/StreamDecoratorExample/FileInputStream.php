<?php

namespace OOP\App\Decorator\StreamDecoratorExample;

class FileInputStream extends InputStream
{
    /**
     * @var string
     */
    private string $input;

    /**
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->input = $text;
    }

    /**
     * @return string
     */
    public function read(): string
    {
        return $this->input;
    }
}

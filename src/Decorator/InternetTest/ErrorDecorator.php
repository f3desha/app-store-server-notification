<?php

namespace OOP\App\Decorator\InternetTest;

class ErrorDecorator extends HtmlDecorator
{
    protected $error;

    public function setError($message)
    {
        $this->error = $message;
    }

    public function __toString()
    {
        return $this->element->__toString() . "<span>{$this->error}</span>\n";
    }
}

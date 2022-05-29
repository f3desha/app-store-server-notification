<?php

namespace OOP\App\Decorator\InternetTest;

abstract class HtmlDecorator implements HtmlElement
{
    protected $element;

    // @todo here the code to implement

    /**
     * @param $element
     */
    public function __construct($element)
    {
        $this->element = $element;
    }

    public function getName()
    {
        return $this->element->getName();
    }
}

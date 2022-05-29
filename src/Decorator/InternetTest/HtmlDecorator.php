<?php

namespace OOP\App\Decorator\InternetTest;

abstract class HtmlDecorator implements HtmlElement
{
    protected $element;

    // @todo here the code to implement

    /**
     * @param $element
     */
    public function __construct(HtmlElement $input)
    {
        $this->element = $input;
    }

    public function getName()
    {
        return $this->element->getName();
    }

    public function __toString()
    {
        return $this->element->__toString();
    }
}

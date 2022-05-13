<?php

namespace OOP\App\Decorator\DressExample;

class SweaterDecorator extends ClothesDecorator
{
    public function getDescription(): string
    {
        return $this->character->getDescription() . ' in a sweater';
    }
}

<?php

namespace OOP\App\Decorator\DressExample;

class KnifeDecorator extends ClothesDecorator
{
    public function getDescription(): string
    {
        return $this->character->getDescription() . ' with a Knife';
    }
}

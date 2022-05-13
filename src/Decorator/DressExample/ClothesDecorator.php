<?php

namespace OOP\App\Decorator\DressExample;

class ClothesDecorator extends Character
{
    protected Character $character;

    public function __construct(Character $character)
    {
        $this->character = $character;
    }

    public function getDescription(): string
    {
        return '';
    }
}

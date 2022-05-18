<?php

namespace OOP\App\Factory\AbstractFactoryUnitExample\Amunition;

abstract class Armor
{
    protected string $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

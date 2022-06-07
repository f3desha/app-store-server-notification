<?php

namespace OOP\App\Composite\Coffee;

use Amp\Loop\UnsupportedFeatureException;

abstract class MenuComponent
{
    /**
     * @throws UnsupportedFeatureException
     */
    public function add(MenuComponent $menuComponent): void
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function remove(MenuComponent $menuComponent): void
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function getChild(int $i): MenuComponent
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function getName(): string
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function getDescription(): string
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function getPrice(): float
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function isVegeterian(): bool
    {
        throw new UnsupportedFeatureException();
    }

    /**
     * @throws UnsupportedFeatureException
     */
    public function print(): void
    {
        throw new UnsupportedFeatureException();
    }
}

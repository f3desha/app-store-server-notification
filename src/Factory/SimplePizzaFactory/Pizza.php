<?php

namespace OOP\App\Factory\SimplePizzaFactory;

abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name;

    public function getPizzasName(): string
    {
        return $this->name;
    }

    public function prepare(): void
    {
        echo "Preparing pizza...\n";
    }

    public function bake(): void
    {
        echo "Baking pizza...\n";
    }

    public function cut(): void
    {
        echo "Cutting pizza...\n";
    }

    public function box(): void
    {
        echo "Boxing pizza...\n";
    }
}

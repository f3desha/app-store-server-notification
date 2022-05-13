<?php

namespace OOP\App\Factory\SimplePizzaFactory;

abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @return string
     */
    public function getPizzasName(): string
    {
        return $this->name;
    }

    /**
     * @return void
     */
    public function prepare(): void
    {
        echo "Preparing pizza...\n";
    }

    /**
     * @return void
     */
    public function bake(): void
    {
        echo "Baking pizza...\n";
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo "Cutting pizza...\n";
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo "Boxing pizza...\n";
    }
}

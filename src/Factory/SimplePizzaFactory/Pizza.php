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
        echo "Standard process of preparing pizza...\n";
    }

    /**
     * @return void
     */
    public function bake(): void
    {
        echo "Standard process of baking pizza...\n";
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo "Standard process of cutting pizza...\n";
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo "Standard process of boxing pizza...\n";
    }
}

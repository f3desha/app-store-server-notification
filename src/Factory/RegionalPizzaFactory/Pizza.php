<?php

namespace OOP\App\Factory\RegionalPizzaFactory;

abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var string
     */
    protected string $dough;

    /**
     * @var string
     */
    protected string $sauce;

    /**
     * @var array
     */
    protected array $toppings = [];

    /**
     * @return void
     */
    public function prepare(): void
    {
        echo "Preparing {$this->name}\n";
        echo "Tossing dough...\n";
        echo "Adding sauce...\n";
        echo "Adding toppings: \n";
        foreach ($this->toppings as $topping) {
            echo " {$topping}";
        }
    }

    /**
     * @return void
     */
    public function bake(): void
    {
        echo "Bake for 25 minutes at 350\n";
    }

    /**
     * @return void
     */
    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    /**
     * @return void
     */
    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}

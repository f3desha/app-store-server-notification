<?php

namespace OOP\App\Factory\AbstractFactoryExample\Pizzas;

use OOP\App\Factory\AbstractFactoryExample\Ingredients\Cheese;
use OOP\App\Factory\AbstractFactoryExample\Ingredients\Clams;
use OOP\App\Factory\AbstractFactoryExample\Ingredients\Dough;
use OOP\App\Factory\AbstractFactoryExample\Ingredients\Pepperoni;
use OOP\App\Factory\AbstractFactoryExample\Ingredients\Sauce;
use OOP\App\Factory\AbstractFactoryExample\Ingredients\Veggie;

abstract class Pizza
{
    /**
     * @var string
     */
    protected string $name;

    /**
     * @var Dough
     */
    protected Dough $dough;

    /**
     * @var Sauce
     */
    protected Sauce $sauce;

    /**
     * @var Veggie[]
     */
    protected array $veggies = [];

    /**
     * @var Cheese
     */
    protected Cheese $cheese;

    /**
     * @var Pepperoni
     */
    protected Pepperoni $pepperoni;

    /**
     * @var Clams
     */
    protected Clams $clam;

    /**
     * @return void
     */
    abstract public function prepare(): void;

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

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function toString(): string
    {
        return '';
    }
}

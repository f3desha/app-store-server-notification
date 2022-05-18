<?php

namespace OOP\App\Factory\AbstractFactoryExample\Ingredients;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;

    /**
     * @return Veggie[]
     */
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClams(): Clams;
}

<?php

namespace OOP\App\Factory\AbstractFactoryExample\Ingredients;

class ChicagoIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    /**
     * @inheritDoc
     */
    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Spinach(),
            new EggPlant()
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClams(): Clams
    {
        return new FrozenClams();
    }
}

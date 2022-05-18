<?php

namespace OOP\App\Factory\AbstractFactoryExample\Pizzas;

use OOP\App\Factory\AbstractFactoryExample\Ingredients\PizzaIngredientFactory;

class ClamPizza extends Pizza
{

    private PizzaIngredientFactory $pizzaIngredientFactory;

    /**
     * @param PizzaIngredientFactory $pizzaIngredientFactory
     */
    public function __construct(PizzaIngredientFactory $pizzaIngredientFactory)
    {
        $this->pizzaIngredientFactory = $pizzaIngredientFactory;
    }


    /**
     * @inheritDoc
     */
    public function prepare(): void
    {
        echo "Preparing {$this->getName()}\n";
        $dough = $this->pizzaIngredientFactory->createDough();
        $sauce = $this->pizzaIngredientFactory->createSauce();
        $cheese = $this->pizzaIngredientFactory->createCheese();
        $clam = $this->pizzaIngredientFactory->createClams();
    }
}

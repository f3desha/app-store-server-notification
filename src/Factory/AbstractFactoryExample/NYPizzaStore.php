<?php

namespace OOP\App\Factory\AbstractFactoryExample;

use OOP\App\Factory\AbstractFactoryExample\Ingredients\NYPizzaIngredientFactory;
use OOP\App\Factory\AbstractFactoryExample\Pizzas\CheesePizza;
use OOP\App\Factory\AbstractFactoryExample\Pizzas\ClamPizza;
use OOP\App\Factory\AbstractFactoryExample\Pizzas\Pizza;

class NYPizzaStore extends PizzaStore
{

    /**
     * @inheritDoc
     */
    protected function createPizza(string $type): Pizza
    {
        $ingredientFactory = new NYPizzaIngredientFactory();

        switch ($type) {
            case 'cheese':
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('New York Style Cheese Pizza');
                break;
            case 'clam':
                $pizza = new ClamPizza($ingredientFactory);
                $pizza->setName('New York Style Clam Pizza');
                break;
            default:
                throw new \Error('Not found...');
        }
        return $pizza;
    }
}

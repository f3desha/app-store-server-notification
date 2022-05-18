<?php

namespace OOP\App\Factory\AbstractFactoryExample;

use OOP\App\Factory\AbstractFactoryExample\Pizzas\Pizza;

abstract class PizzaStore
{

    /**
     * @param string $type
     * @return Pizza
     */
    final public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    /**
     * @param string $type
     * @return Pizza
     */
    abstract protected function createPizza(string $type): Pizza;
}

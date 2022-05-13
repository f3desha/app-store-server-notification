<?php

namespace OOP\App\Factory\SimplePizzaFactory;

class PizzaStore
{
    /**
     * @var SimplePizzaFactory
     */
    private SimplePizzaFactory $pizzaFactory;

    /**
     * @param SimplePizzaFactory $pizzaFactory
     */
    public function __construct(SimplePizzaFactory $pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    public function orderPizza(string $type): void
    {
        $pizza = $this->pizzaFactory->create($type);

        echo $pizza->getPizzasName() . "\n";
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        echo "\n";
    }
}

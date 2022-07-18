<?php

namespace OOP\App\Mix\PatternPattern;

class CountingDuckFactory extends AbstractDuckFactory
{

    public function createMallardDuck(): Quackable
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedheadDuck(): Quackable
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall(): Quackable
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck(): Quackable
    {
        return new QuackCounter(new RubberDuck());
    }

    public function createGooseAdapter(): Quackable
    {
        return new QuackCounter(new GooseAdapter(new Goose()));
    }


}

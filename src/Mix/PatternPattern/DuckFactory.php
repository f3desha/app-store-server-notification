<?php

namespace OOP\App\Mix\PatternPattern;

class DuckFactory extends AbstractDuckFactory
{

    public function createMallardDuck(): Quackable
    {
        return new MallardDuck();
    }

    public function createRedheadDuck(): Quackable
    {
        return new RedheadDuck();
    }

    public function createDuckCall(): Quackable
    {
        return new DuckCall();
    }

    public function createRubberDuck(): Quackable
    {
        return new RubberDuck();
    }

    public function createGooseAdapter(): Quackable
    {
        return new GooseAdapter(new Goose());
    }


}

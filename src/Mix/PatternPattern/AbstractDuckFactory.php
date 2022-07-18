<?php

namespace OOP\App\Mix\PatternPattern;

abstract class AbstractDuckFactory
{
    abstract public function createMallardDuck(): Quackable;

    abstract public function createRedheadDuck(): Quackable;

    abstract public function createDuckCall(): Quackable;

    abstract public function createRubberDuck(): Quackable;

    abstract public function createGooseAdapter(): Quackable;

}

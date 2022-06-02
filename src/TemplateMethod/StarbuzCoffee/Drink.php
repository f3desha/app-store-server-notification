<?php

namespace OOP\App\TemplateMethod\StarbuzCoffee;

abstract class Drink
{

    final public function prepare(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pushInCup();
        if ($this->ifCondiments()) {
            $this->addCondiments();
        }
    }

    private function boilWater(): void
    {
        echo "Boiling water...\n";
    }

    abstract protected function brew(): void;

    private function pushInCup(): void
    {
        echo "Taking drink into a cup...\n";
    }

    protected function ifCondiments(): bool
    {
        return false;
    }

    abstract protected function addCondiments(): void;
}

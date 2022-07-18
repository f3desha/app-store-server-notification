<?php

namespace OOP\App\Mix\PatternPattern;

use OOP\App\Iterator\MyIterator;

class Flock implements Quackable
{
    /**
     * @var array $quackers
     */
    public array $quackers = [];


    public function quack(): void
    {
        $iterator = $this->getIterator();
        while ($iterator->hasNext()) {
            $quacker = $iterator->next();
            $quacker->quack();
        }
    }

    public function getIterator(): MyIterator
    {
        return new QuackersIterator($this->quackers);
    }

    public function add(Quackable $quackable): void
    {
        $this->quackers[] = $quackable;
    }


}

<?php

namespace OOP\App\State\GumballAutomat;

class NoQuarterState implements State
{
    /**
     * @var GumballMachine $gumballMachine
     */
    private GumballMachine $gumballMachine;

    /**
     * @param GumballMachine $gumballMachine
     */
    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter(): void
    {
        echo "You inserted a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter(): void
    {
        echo "You havent inserted a quarter\n";
    }

    public function turnCrank(): void
    {
        echo "You turned but there is no quarter\n";
    }

    public function dispense(): void
    {
        echo "You need to pay first\n";
    }
}

<?php

namespace OOP\App\State\GumballAutomat;

class HasQuarterState implements State
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
        echo "You cant insert another quarter\n";
    }

    public function ejectQuarter(): void
    {
        echo "Quarter returned\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank(): void
    {
        echo "You turned...\n";
        $rand = mt_rand(1, 10);
        if ($rand === 10 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
        } else {
            $this->gumballMachine->setState($this->gumballMachine->getSoldState());
        }
    }

    public function dispense(): void
    {
        echo "No gumball dispensed\n";
    }
}

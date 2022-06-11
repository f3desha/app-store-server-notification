<?php

namespace OOP\App\State\GumballAutomat;

class SoldState implements State
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
        echo "Please wait, we already giving you a gumball...";
    }

    public function ejectQuarter(): void
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnCrank(): void
    {
        echo "Turning twice doesnt get you another gumball\n";
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs\n";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}

<?php

namespace OOP\App\State\GumballAutomat;

class SoldOutState implements State
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
        echo "You cant insert the quarter, the machine is sold out\n";
    }

    public function ejectQuarter(): void
    {
        echo "You cant eject the quarter, the machine is sold out\n";
    }

    public function turnCrank(): void
    {
        echo "You turned, but there are no gumballs\n";
    }

    public function dispense(): void
    {
        echo "No gumballs no dispense\n";
    }
}

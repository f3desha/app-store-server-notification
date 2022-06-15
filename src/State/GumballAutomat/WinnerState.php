<?php

namespace OOP\App\State\GumballAutomat;

class WinnerState implements State
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
        // TODO: Implement insertQuarter() method.
    }

    public function ejectQuarter(): void
    {
        // TODO: Implement ejectQuarter() method.
    }

    public function turnCrank(): void
    {
        // TODO: Implement turnCrank() method.
    }

    public function dispense(): void
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() === 0) {
            echo "Oops, out of gumballs\n";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        } else {
            $this->gumballMachine->releaseBall();
            echo "You are a winner!\n";
            if ($this->gumballMachine->getCount() > 0) {
                $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
            } else {
                $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
            }
        }
    }
}

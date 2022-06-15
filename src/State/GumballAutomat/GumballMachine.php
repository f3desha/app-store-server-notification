<?php

namespace OOP\App\State\GumballAutomat;

class GumballMachine
{
    /**
     * @var State $soldOutState
     */
    private State $soldOutState;

    /**
     * @var State $noQuarterState
     */
    private State $noQuarterState;

    /**
     * @var State $hasQuarterState
     */
    private State $hasQuarterState;

    /**
     * @var State $soldState
     */
    private State $soldState;

    /**
     * @var State $winnerState
     */
    private State $winnerState;

    /**
     * @var State $state
     */
    private State $state;

    /**
     * @var int $count
     */
    private int $count = 0;

    /**
     * @param int $numberGumballs
     */
    public function __construct(int $numberGumballs)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->count = $numberGumballs;
        if ($numberGumballs > 0) {
            $this->state = $this->noQuarterState;
        } else {
            $this->state = $this->soldOutState;
        }
    }

    public function status(): void
    {
        echo $this->count . "\n";
    }


    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function insertQuarter(): void
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter(): void
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank(): void
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function releaseBall(): void
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count !== 0) {
            $this->count--;
        }
    }

    /**
     * @return State
     */
    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    /**
     * @return State
     */
    public function getNoQuarterState(): State
    {
        return $this->noQuarterState;
    }

    /**
     * @return State
     */
    public function getHasQuarterState(): State
    {
        return $this->hasQuarterState;
    }

    /**
     * @return State
     */
    public function getSoldState(): State
    {
        return $this->soldState;
    }

    /**
     * @return State
     */
    public function getWinnerState(): WinnerState|State
    {
        return $this->winnerState;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
}

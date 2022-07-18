<?php

namespace OOP\App\Mix\PatternPattern;

class DuckSimulator
{
    public function main(): void
    {
        $simulator = new self();
        $duckFactory = new CountingDuckFactory();
        $simulator->simulate($duckFactory);
    }

    public function simulate(AbstractDuckFactory $duckFactory): void
    {
        $mallardDuck = $duckFactory->createMallardDuck();
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = $duckFactory->createGooseAdapter();

        $flockOfDucks = new Flock();

        $flockOfDucks->add($mallardDuck);
        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $flockOfMallards = new Flock();
        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);

        $flockOfDucks->add($flockOfMallards);

        $this->simul($flockOfDucks);

    }

    public function simul(Quackable $quackable): void
    {
        $quackable->quack();
    }


}

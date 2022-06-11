<?php

namespace OOP\App\State\GumballAutomat;

interface State
{
    public function insertQuarter(): void;

    public function ejectQuarter(): void;

    public function turnCrank(): void;

    public function dispense(): void;
}

<?php

namespace OOP\App\Factory\AbstractCarFactory;

interface VehiclePartsAssembly
{
    public function createBody(): Body;
    public function createEngine(): Engine;
    public function createWheels(): Wheels;
    public function createTransmission(): Transmission;
}
<?php

namespace OOP\App\Factory\AbstractCarFactory;

class NYBMWPartsAssembly implements VehiclePartsAssembly
{

    public function createBody(): Body
    {
        return new SedanBody();
    }

    public function createEngine(): Engine
    {
        return new BoschEngine();
    }

    public function createWheels(): Wheels
    {
        return new MichelinWheels();
    }

    public function createTransmission(): Transmission
    {
        return new AutomaticTransmission();
    }
}

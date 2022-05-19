<?php

namespace OOP\App\Factory\AbstractCarFactory;

class BMWC300 extends Car
{
    public function assemble(): void
    {
        $this->body = $this->assemblyParts->createBody();
        $this->engine = $this->assemblyParts->createEngine();
        $this->wheels = $this->assemblyParts->createWheels();
        $this->transmission = $this->assemblyParts->createTransmission();
    }
}
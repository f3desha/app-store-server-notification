<?php

namespace OOP\App\Factory\AbstractCarFactory;

abstract class Car
{
    protected VehiclePartsAssembly $assemblyParts;

    protected string $name;

    protected Body $body;

    protected Engine $engine;

    protected Wheels $wheels;

    protected Transmission $transmission;

    /**
     * @param VehiclePartsAssembly $assemblyParts
     */
    public function __construct(VehiclePartsAssembly $assemblyParts)
    {
        $this->assemblyParts = $assemblyParts;
    }

    abstract public function assemble(): void;

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

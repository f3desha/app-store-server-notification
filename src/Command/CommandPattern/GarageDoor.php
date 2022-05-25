<?php

namespace OOP\App\Command\CommandPattern;

class GarageDoor
{
    public function up(): void
    {
        echo "Door goes up\n";
    }

    public function down(): void
    {
        echo "Door goes down\n";
    }

    public function stop(): void
    {
        echo "Door stoped\n";
    }

    public function lightOn(): void
    {
        echo "Light is on\n";
    }

    public function lightOff(): void
    {
        echo "Light is off\n";
    }
}

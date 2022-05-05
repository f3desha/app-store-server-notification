<?php

namespace OOP\App\AnimalExample\Behavior;

class MeowBehavior implements VoiceBehavior
{

    public function makeSound()
    {
        echo "Meow!";
    }
}
<?php

namespace OOP\App\Strategy\AnimalExample\Behavior;

class MeowBehavior implements VoiceBehavior
{

    public function makeSound()
    {
        echo "Meow!";
    }
}

<?php

namespace OOP\App\AnimalExample\Behavior;

class BarkBehavior implements VoiceBehavior
{

    public function makeSound()
    {
        echo "Gav!";
    }
}
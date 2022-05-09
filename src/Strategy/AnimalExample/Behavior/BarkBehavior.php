<?php

namespace OOP\App\Strategy\AnimalExample\Behavior;

class BarkBehavior implements VoiceBehavior
{

    public function makeSound()
    {
        echo "Gav!";
    }
}

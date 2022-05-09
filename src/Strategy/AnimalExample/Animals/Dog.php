<?php

namespace OOP\App\Strategy\AnimalExample\Animals;

use OOP\App\Strategy\AnimalExample\Behavior\BarkBehavior;

class Dog extends Animal
{
    public function __construct()
    {
        $this->setVoiceBehavior(new BarkBehavior());
    }
}

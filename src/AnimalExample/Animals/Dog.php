<?php

namespace OOP\App\AnimalExample\Animals;

use OOP\App\AnimalExample\Behavior\BarkBehavior;

class Dog extends Animal
{
    public function __construct()
    {
        $this->setVoiceBehavior(new BarkBehavior());
    }

}
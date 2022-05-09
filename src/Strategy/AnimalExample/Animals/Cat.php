<?php

namespace OOP\App\Strategy\AnimalExample\Animals;

use OOP\App\Strategy\AnimalExample\Behavior\MeowBehavior;

class Cat extends Animal
{
    public function __construct()
    {
        $this->setVoiceBehavior(new MeowBehavior());
    }
}

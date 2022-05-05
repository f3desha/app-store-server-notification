<?php

namespace OOP\App\AnimalExample\Animals;

use OOP\App\AnimalExample\Behavior\MeowBehavior;

class Cat extends Animal
{
    public function __construct()
    {
        $this->setVoiceBehavior(new MeowBehavior());
    }

}
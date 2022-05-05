<?php

namespace OOP\App\AnimalExample;

class Dog extends Animal
{
    public function bark()
    {
        echo 'Gav!';
    }

    public function makeSound()
    {
        $this->bark();
    }
}
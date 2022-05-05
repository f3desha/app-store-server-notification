<?php

namespace OOP\App\AnimalExample;

class Cat extends Animal
{

    public function meow()
    {
        echo 'Meow!';
    }

    public function makeSound()
    {
        $this->meow();
    }
}
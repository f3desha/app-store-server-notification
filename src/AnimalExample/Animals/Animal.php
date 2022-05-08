<?php

namespace OOP\App\AnimalExample\Animals;

use OOP\App\AnimalExample\Behavior\VoiceBehavior;

abstract class Animal
{
    protected VoiceBehavior $voiceBehavior;

    /**
     * @param VoiceBehavior $voiceBehavior
     */
    public function setVoiceBehavior(VoiceBehavior $voiceBehavior): void
    {
        $this->voiceBehavior = $voiceBehavior;
    }

    public function giveAVoice()
    {
        $this->voiceBehavior->makeSound();
    }
}

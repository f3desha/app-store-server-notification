<?php

namespace OOP\App\Strategy\AnimalExample\Animals;

use OOP\App\Strategy\AnimalExample\Behavior\VoiceBehavior;

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

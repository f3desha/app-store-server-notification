<?php

namespace OOP\App\Mix\PatternPattern;

class GooseAdapter implements Quackable
{
    /**
     * @var Goose $goose
     */
    public Goose $goose;

    public function __construct(Goose $goose)
    {
        $this->goose = $goose;
    }

    public function quack(): void
    {
        $this->goose->honk();
    }
}

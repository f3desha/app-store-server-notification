<?php

namespace OOP\App\Mix\PatternPattern;

class QuackCounter implements Quackable
{

    /**
     * @var int $quackNumber
     */
    public static int $quackNumber = 0;

    /**
     * @var Quackable $duck
     */
    public Quackable $duck;

    public function __construct($duck)
    {
        $this->duck = $duck;
    }

    public static function getQuacks(): int
    {
        return self::$quackNumber;
    }

    public function quack(): void
    {
        $this->duck->quack();
        self::$quackNumber++;
    }

}

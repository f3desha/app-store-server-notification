<?php

namespace OOP\App\Singleton\ClassicSingleton;

/**
 *
 */
class Singleton
{


    /**
     * @var Singleton|null
     */
    private static ?Singleton $instance = null;

    /**
     *
     */
    private function __construct()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

<?php

namespace OOP\App\Singleton\ChocolateBoiler;

class ChocolateBoiler
{
    /**
     * @var ChocolateBoiler|null
     */
    private static ?ChocolateBoiler $uniqueInstance = null;

    /**
     * @var bool $empty
     */
    private bool $empty;

    /**
     * @var bool $boiled
     */
    private bool $boiled;

    private function __construct()
    {
        $this->empty = true;
        $this->boiled = false;
    }

    /**
     * @return ChocolateBoiler|null
     */
    public static function getInstance(): ?ChocolateBoiler
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new self();
        }
        return self::$uniqueInstance;
    }

    /**
     * @return void
     */
    public function boil(): void
    {
        if ($this->isEmpty() && $this->isBoiled()) {
            $this->boiled = true;
        }
    }

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return $this->empty;
    }

    /**
     * @return bool
     */
    public function isBoiled(): bool
    {
        return $this->boiled;
    }

    /**
     * @return void
     */
    public function fill(): void
    {
        if ($this->isEmpty()) {
            $this->empty = false;
            $this->boiled = false;
        }
    }
}

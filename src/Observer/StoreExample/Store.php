<?php

namespace OOP\App\Observer\StoreExample;

class Store implements Subject
{
    /**
     * @var Observer[]
     */
    private array $observers;

    public function registerObserver(Observer $o): void
    {
        $this->observers[] = $o;
    }

    public function removeObserver(Observer $o): void
    {
        $key = array_search($o, $this->observers);
        unset($this->observers[$key]);
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $o) {
            $o->update();
        }
    }

    public function updateGoods(): void
    {
        $this->notifyObservers();
    }
}

<?php

namespace OOP\App\Observer\InternetTest;

use SplObserver;
use SplSubject;

class Product implements SplSubject
{
    private $data = [];

    private $eventId = 0;

    private array $observers = [];

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
        $this->notify();
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers);
        unset($this->observers[$key]);
    }
}

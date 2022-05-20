<?php

namespace OOP\App\Observer\UIExample;

use SplObserver;
use SplSubject;

class Button implements SplSubject
{
    /**
     * @var SplObserver[]
     */
    private array $listeners = [];

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->listeners[] = $observer;
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->listeners);
        unset($this->listeners[$key]);
    }

    /**
     * @return void
     */
    public function press(): void
    {
        echo "Button pressed\n";
        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->listeners as $listener) {
            $listener->update($this);
        }
    }
}

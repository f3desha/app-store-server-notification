<?php

namespace OOP\App\Observer\InternetTest;

use SplObserver;
use SplSubject;

class Logger implements SplObserver
{
    private $events = [];

    public function getEvents()
    {
        return $this->events;
    }

    public function update(SplSubject $subject): void
    {
        $this->events[] = 'Data modified';
    }
}

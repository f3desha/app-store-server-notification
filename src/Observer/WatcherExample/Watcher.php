<?php

namespace OOP\App\Observer\WatcherExample;

use SplObserver;
use SplSubject;

class Watcher implements SplSubject
{

    /**
     * @var SplObserver[]
     */
    private array $observers = [];

    /**
     * @var array
     */
    private array $fileChanged = [
        'type' => null,
        'path' => ''
    ];

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param SplObserver $observer
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers);
        unset($this->observers[$key]);
    }

    /**
     * @return array
     */
    public function getFileChanged(): array
    {
        return $this->fileChanged;
    }

    /**
     * @param string $filePath
     * @return void
     */
    public function fileChanged(string $filePath): void
    {
        $exploded = explode('.', $filePath);
        $this->fileChanged = [
            'type' => $exploded[count($exploded) - 1],
            'path' => ''
        ];

        $this->notify();
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}

<?php

namespace OOP\App\Observer\WatcherExample;

use SplObserver;
use SplSubject;

class CssCompiler implements SplObserver
{
    /**
     * @var SplSubject
     */
    private SplSubject $watcher;

    /**
     * @param SplSubject $watcher
     */
    public function __construct(SplSubject $watcher)
    {
        $this->watcher = $watcher;
        $this->watcher->attach($this);
    }

    public function update(SplSubject $subject): void
    {
        $file = $subject->getFileChanged();
        if ($file['type'] === 'css') {
            $this->compile();
        }
    }

    public function compile(): void
    {
        echo "css compile\n";
    }
}

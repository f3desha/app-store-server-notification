<?php

namespace OOP\App\Observer\WatcherExample;

use SplObserver;
use SplSubject;

class JsCompiler implements SplObserver
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


    public function compile(): void
    {
        echo "js compile\n";
    }

    public function update(SplSubject $subject): void
    {
        $file = $subject->getFileChanged();
        if ($file['type'] === 'js') {
            $this->compile();
        }
    }
}

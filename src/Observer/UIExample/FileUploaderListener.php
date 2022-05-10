<?php

namespace OOP\App\Observer\UIExample;

use SplObserver;
use SplSubject;

class FileUploaderListener implements SplObserver
{
    /**
     * @var SplSubject
     */
    private SplSubject $button;

    /**
     * @param SplSubject $button
     */
    public function __construct(SplSubject $button)
    {
        $this->button = $button;
        $this->button->attach($this);
    }

    public function update(SplSubject $subject): void
    {
        $this->upload();
    }

    public function upload(): void
    {
        echo "File upload initiated\n";
    }
}

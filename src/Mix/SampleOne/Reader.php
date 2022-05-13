<?php

namespace OOP\App\Mix\SampleOne;

class Reader
{
    /**
     * @var ReaderBehavior
     */
    private ReaderBehavior $readerBehavior;

    /**
     * @param ReaderBehavior $readerBehavior
     */
    public function __construct(ReaderBehavior $readerBehavior)
    {
        $this->readerBehavior = $readerBehavior;
    }

    public function performRead(): string
    {
        return $this->readerBehavior->read();
    }
}

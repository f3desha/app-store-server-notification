<?php

namespace OOP\App\Mix\SampleOne;

class Reader
{
    /**
     * @var ReaderStrategy
     */
    private ReaderStrategy $readerBehavior;

    /**
     * @param ReaderStrategy $readerBehavior
     */
    public function __construct(ReaderStrategy $readerBehavior)
    {
        $this->readerBehavior = $readerBehavior;
    }

    public function performRead(): string
    {
        return $this->readerBehavior->read();
    }
}

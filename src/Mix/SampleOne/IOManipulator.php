<?php

namespace OOP\App\Mix\SampleOne;

class IOManipulator
{
    /**
     * @var Reader
     */
    private Reader $readerBehavior;

    /**
     * @var Writer
     */
    private Writer $writerBehavior;

    /**
     * @param Reader $readerBehavior
     */
    public function setReaderStrategy(Reader $readerBehavior)
    {
        $this->readerBehavior = $readerBehavior;
    }

    public function setWriterStrategy(Writer $writerBehavior)
    {
        $this->writerBehavior = $writerBehavior;
    }

    /**
     * @return string
     */
    public function performRead(): string
    {
        return $this->readerBehavior->read();
    }

    /**
     * @return void
     */
    public function performWrite(string $text)
    {
        $this->writerBehavior->write();
    }


}

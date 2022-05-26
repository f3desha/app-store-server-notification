<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class StereoOnCommand implements Command
{

    /**
     * @var Stereo $stereo
     */
    private Stereo $stereo;

    /**
     * @param Stereo $stereo
     */
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute(): void
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}

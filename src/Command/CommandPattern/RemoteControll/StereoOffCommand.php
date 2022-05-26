<?php

namespace OOP\App\Command\CommandPattern\RemoteControll;

class StereoOffCommand implements Command
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
        $this->stereo->off();
    }
}

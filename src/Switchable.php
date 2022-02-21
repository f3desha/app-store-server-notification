<?php

namespace Kilohealth\App;

interface Switchable {
    public function turnOn();
    public function turnOff();
    public function isActive() : bool;
}
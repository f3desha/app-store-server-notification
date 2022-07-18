<?php

namespace OOP\App\Mix\PatternPattern;

class DuckCall implements Quackable
{

    public function quack(): void
    {
        echo "Kwak\n";
    }
}

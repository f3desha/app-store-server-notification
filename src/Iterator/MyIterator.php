<?php

namespace OOP\App\Iterator;

interface MyIterator
{
    public function hasNext(): bool;

    public function next();
}

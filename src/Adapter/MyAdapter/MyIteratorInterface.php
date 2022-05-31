<?php

namespace OOP\App\Adapter\MyAdapter;

interface MyIteratorInterface
{
    public function getNextElementSpec();

    public function addSpec($element): void;
}

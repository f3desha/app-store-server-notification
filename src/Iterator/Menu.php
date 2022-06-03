<?php

namespace OOP\App\Iterator;

interface Menu
{
    public function getIterator(): MyIterator;

    public function getAdapter($item): MyMenuItemAdapter;

    public function getName(): string;
}

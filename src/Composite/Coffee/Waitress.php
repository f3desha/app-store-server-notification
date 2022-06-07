<?php

namespace OOP\App\Composite\Coffee;

class Waitress
{
    /**
     * @var MenuComponent $allMenus
     */
    private MenuComponent $allMenus;

    public function __construct(MenuComponent $allMenus)
    {
        $this->allMenus = $allMenus;
    }

    public function printMenu(): void
    {
        $this->allMenus->print();
    }
}

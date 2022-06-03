<?php

namespace OOP\App\Iterator;

class KFCsMenuItemAdapter implements MyMenuItemAdapter
{
    /**
     * @var array $kfcMenuItem
     */
    private array $kfcMenuItem;

    /**
     * @param array $kfcMenuItem
     */
    public function __construct(array $kfcMenuItem)
    {
        $this->kfcMenuItem = $kfcMenuItem;
    }


    public function getItemsName(): string
    {
        return $this->kfcMenuItem[0];
    }

    public function getItemsPrice(): float
    {
        return $this->kfcMenuItem[1];
    }
}

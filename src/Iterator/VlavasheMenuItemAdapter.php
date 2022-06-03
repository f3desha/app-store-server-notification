<?php

namespace OOP\App\Iterator;

class VlavasheMenuItemAdapter implements MyMenuItemAdapter
{
    /**
     * @var VlavasheItem $item
     */
    private VlavasheItem $item;

    /**
     * @param VlavasheItem $item
     */
    public function __construct(VlavasheItem $item)
    {
        $this->item = $item;
    }


    public function getItemsName(): string
    {
        return $this->item->getName();
    }

    public function getItemsPrice(): float
    {
        return $this->item->getPrice();
    }
}

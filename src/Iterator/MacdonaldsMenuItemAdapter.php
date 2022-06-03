<?php

namespace OOP\App\Iterator;

class MacdonaldsMenuItemAdapter implements MyMenuItemAdapter
{
    /**
     * @var MacFoodItem $macItem
     */
    private MacFoodItem $macItem;

    /**
     * @param MacFoodItem $macItem
     */
    public function __construct(MacFoodItem $macItem)
    {
        $this->macItem = $macItem;
    }


    public function getItemsName(): string
    {
        return $this->macItem->getName();
    }

    public function getItemsPrice(): float
    {
        return $this->macItem->getPrice();
    }
}

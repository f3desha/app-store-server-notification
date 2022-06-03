<?php

namespace OOP\App\Iterator;

use Generator;

class Waitress
{
    /**
     * @var KFCsMenu $kfcMenu
     */
    private KFCsMenu $kfcMenu;

    /**
     * @var MacdonaldsMenu $macMenu
     */
    private MacdonaldsMenu $macMenu;

    /**
     * @var VlavasheMenu $vlavasheMenu
     */
    private VlavasheMenu $vlavasheMenu;

    /**
     * @param KFCsMenu $kfcMenu
     * @param MacdonaldsMenu $macMenu
     */
    public function __construct(KFCsMenu $kfcMenu, MacdonaldsMenu $macMenu, VlavasheMenu $vlavasheMenu)
    {
        $this->kfcMenu = $kfcMenu;
        $this->macMenu = $macMenu;
        $this->vlavasheMenu = $vlavasheMenu;
    }

    public function print(): void
    {
        echo $this->kfcMenu->getName() . ":\n";
        foreach ($this->getMenuItem($this->kfcMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem($this->kfcMenu->getAdapter($menuItem));
        }
        echo "=================\n";
        echo $this->macMenu->getName() . ":\n";
        foreach ($this->getMenuItem($this->macMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem($this->macMenu->getAdapter($menuItem));
        }
        echo "=================\n";
        echo $this->vlavasheMenu->getName() . ":\n";
        foreach ($this->getMenuItem($this->vlavasheMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem($this->vlavasheMenu->getAdapter($menuItem));
        }
        echo "=================\n";
    }

    private function printMyMenuItem(MyMenuItemAdapter $item): void
    {
        echo $item->getItemsName() . ' - ' . $item->getItemsPrice() . "$\n";
    }

    private function getMenuItem(MyIterator $iterator): Generator
    {
        while ($iterator->hasNext()) {
            yield $iterator->next();
        }
    }
}

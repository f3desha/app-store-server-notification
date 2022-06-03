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
        echo "KFC's Menu:\n";
        foreach ($this->getMenu($this->kfcMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem(new KFCsMenuItemAdapter($menuItem));
        }
        echo "=================\n";
        echo "MacDonald's Menu:\n";
        foreach ($this->getMenu($this->macMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem(new MacdonaldsMenuItemAdapter($menuItem));
        }
        echo "=================\n";
        echo "Vlavashe Menu:\n";
        foreach ($this->getMenu($this->vlavasheMenu->getIterator()) as $menuItem) {
            $this->printMyMenuItem(new VlavasheMenuItemAdapter($menuItem));
        }
        echo "=================\n";
    }

    private function printMyMenuItem(MyMenuItemAdapter $item): void
    {
        echo $item->getItemsName() . ' - ' . $item->getItemsPrice() . "\n";
    }

    private function getMenu(MyIterator $iterator): Generator
    {
        while ($iterator->hasNext()) {
            yield $iterator->next();
        }
    }
}

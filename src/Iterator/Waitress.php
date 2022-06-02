<?php

namespace OOP\App\Iterator;

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
     * @param KFCsMenu $kfcMenu
     * @param MacdonaldsMenu $macMenu
     */
    public function __construct(KFCsMenu $kfcMenu, MacdonaldsMenu $macMenu)
    {
        $this->kfcMenu = $kfcMenu;
        $this->macMenu = $macMenu;
    }

    public function print(): void
    {
        $this->printMenu($this->kfcMenu->getIterator());
        $this->printMenu($this->macMenu->getIterator());
    }

    private function printMenu(MyIterator $iterator): void
    {
        while ($iterator->hasNext()) {
            var_dump($iterator->next());
        }
    }
}

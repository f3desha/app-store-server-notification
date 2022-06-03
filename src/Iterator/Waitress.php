<?php

namespace OOP\App\Iterator;

use Generator;

class Waitress
{
    /**
     * @var array $menusCollection
     */
    private array $menusCollection;

    public function __construct(array $menusCollection)
    {
        $this->menusCollection = $menusCollection;
    }

    public function print(): void
    {
        $menusIterator = new MenusCollection($this->menusCollection);

        while ($menusIterator->hasNext()) {
            $menu = $menusIterator->next();
            echo $menu->getName() . ":\n";
            foreach ($this->getMenuItem($menu->getIterator()) as $menuItem) {
                $this->printMyMenuItem($menu->getAdapter($menuItem));
            }
            echo "=================\n";
        }
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

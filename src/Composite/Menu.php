<?php

namespace OOP\App\Composite;

use OOP\App\Iterator\MyIterator;

class Menu extends MenuComponent
{
    /**
     * @var MenuComponent[] $menuComponents
     */
    private array $menuComponents = [];

    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    public function add(MenuComponent $menuComponent): void
    {
        $this->menuComponents[] = $menuComponent;
    }

    public function remove(MenuComponent $menuComponent): void
    {
        $key = array_search($menuComponent, $this->menuComponents);
        unset($this->menuComponents[$key]);
    }

    public function print(): void
    {
        echo "\n" . $this->getName() . ", " . $this->getDescription() . " -----------------\n";

        $iterator = $this->getIterator();
        while ($iterator->hasNext()) {
            $item = $iterator->next();
            $item->print();
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function getIterator(): MyIterator
    {
        return new MenuIterator($this->menuComponents);
    }
}

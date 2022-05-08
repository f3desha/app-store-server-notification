<?php

namespace OOP\App\StoreExample;

class Baker implements Observer
{
    /**
     * @var Subject
     */
    private Subject $store;

    /**
     * @param Subject $store
     */
    public function __construct(Subject $store)
    {
        $this->store = $store;
        $this->store->registerObserver($this);
    }

    public function update(): void
    {
        $this->acknowledge();
    }

    public function acknowledge()
    {
        echo "Backer says: thx for update!\n";
    }

}
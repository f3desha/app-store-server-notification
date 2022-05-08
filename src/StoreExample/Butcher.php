<?php

namespace OOP\App\StoreExample;

class Butcher implements Observer
{

    /**
     * @var Subject
     */
    private Subject $store;

    public function __construct($store)
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
        echo "Butcher says: thx for update!\n";
    }
}

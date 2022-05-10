<?php
namespace PatternsTests;

use OOP\App\Observer\StoreExample\Baker;
use OOP\App\Observer\StoreExample\Butcher;
use OOP\App\Observer\StoreExample\Store;
use PHPUnit\Framework\TestCase;

class StoreTest extends TestCase
{
    public function testStore()
    {
        $store = new Store();
        $butcher = new Butcher($store);
        $backer = new Baker($store);

        $store->updateGoods();

        $store->removeObserver($backer);
        $store->updateGoods();


        $this->assertSame(0, 0);
    }
}

<?php

namespace Feature;

use OOP\App\Adapter\InternetTest\CreditCard;
use OOP\App\Adapter\InternetTest\CreditCardAdapter;
use OOP\App\Adapter\InternetTest\PayPal;
use OOP\App\Adapter\InternetTest\PayPalAdapter;
use OOP\App\Adapter\MyAdapter\MyIterator;
use OOP\App\Adapter\MyAdapter\MyIteratorSplDoublyLinkedListAdapter;
use OOP\App\Factory\FactoryMethod\LogisticsFactory\LogisticsFactory;
use OOP\App\Factory\InternetTest\MyShopProductFactory;
use OOP\App\Factory\InternetTest\Shop;
use OOP\App\TemplateMethod\StarbuzCoffee\Tea;
use PHPUnit\Framework\TestCase;
use SplDoublyLinkedList;

class PatternsTest extends TestCase
{
    public function testStarbuzCoffee()
    {
        $drink = new Tea();
        $drink->prepare();

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testLogistFactoryMethods()
    {
        $logisticsFactory = LogisticsFactory::defineLogistics('road');
        $transport = $logisticsFactory->createTransport();
        $transport->deliver();

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testMyList()
    {
        //Concrete list implements MyIteratorInterface
        $myIter = new MyIterator();
        $myIter->addSpec(888);

        $l = new SplDoublyLinkedList();
        $l->add(0, 5);
        $l->add(1, 6);
        $l->add(2, 7);

        $list = new MyIteratorSplDoublyLinkedListAdapter($l);

        //Dependent on interface code goes here
        $list->addSpec(1);
        $list->addSpec(2);
        $list->addSpec(3);
        echo $list->getNextElementSpec() . "\n";

        echo "\n===========================\n";
        $this->assertSame(0, 0);
    }

    public function testFactoryInternetCase()
    {
        $productData = [
            // id => [name, weight]
            'BumperSticker1' => ['Bumper Sticker Item #1', 1],
            'BumperSticker3' => ['Bumper Sticker Item #3', 1],
            'BumperSticker5' => ['Bumper Sticker Item #5', 1],
            'CoffeeTableBook6' => ['Coffee Table Book Item #6 (500 pages)', 5],
            'CoffeeTableBook7' => ['Coffee Table Book Item #7 (300 pages)', 3],
            'CoffeeTableBook9' => ['Coffee Table Book Item #9 (900 pages)', 9],
        ];

        $shippingMethodData = [
            // code => [miles, weight]
            'UPS' => [1.4, 1.1],
            'FEXED' => [2.2, 1.3],
        ];

        $shop = new Shop(new MyShopProductFactory($productData, $shippingMethodData));

        $targetOutput = <<<EOS
BumperSticker1 - Bumper Sticker Item #1 / via: UPS, cost: $15.1
CoffeeTableBook6 - Coffee Table Book Item #6 (500 pages) / via: UPS, cost: $19.5
EOS;
        // simulation of Shopping Cart Listings Page
        $actualOutput = $shop->listProductsWithShippingCost(
            ['BumperSticker1', 'CoffeeTableBook6'],
            'UPS',
            10
        );

        $this->assertTrue($actualOutput == $targetOutput);
    }


    public function testInternetTestAdaptor()
    {
        $paypal = new PayPal('customer@aol.com', 'password');
        $cc = new CreditCard(1234567890123456, "09/12");

        $paypalAdapter = new PayPalAdapter($paypal);
        $ccAdapter = new CreditCardAdapter($cc);

        $this->assertTrue($paypalAdapter->collectMoney(50));
        $this->assertTrue($ccAdapter->collectMoney(50));
    }
}

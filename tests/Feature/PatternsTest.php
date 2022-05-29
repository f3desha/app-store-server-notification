<?php

namespace Feature;

use OOP\App\Adapter\InternetTest\CreditCard;
use OOP\App\Adapter\InternetTest\CreditCardAdapter;
use OOP\App\Adapter\InternetTest\PayPal;
use OOP\App\Adapter\InternetTest\PayPalAdapter;
use OOP\App\Factory\InternetTest\MyShopProductFactory;
use OOP\App\Factory\InternetTest\Shop;
use PHPUnit\Framework\TestCase;

class PatternsTest extends TestCase
{
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

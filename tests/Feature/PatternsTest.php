<?php

namespace Feature;

use OOP\App\Adapter\InternetTest\CreditCard;
use OOP\App\Adapter\InternetTest\CreditCardAdapter;
use OOP\App\Adapter\InternetTest\PayPal;
use OOP\App\Adapter\InternetTest\PayPalAdapter;
use PHPUnit\Framework\TestCase;

class PatternsTest extends TestCase
{
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

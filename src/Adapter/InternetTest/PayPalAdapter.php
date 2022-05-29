<?php

namespace OOP\App\Adapter\InternetTest;

class PayPalAdapter implements PaymentAdapterInterface
{
    /**
     * @var PayPal $paypal
     */
    private PayPal $paypal;

    /**
     * @param PayPal $paypal
     */
    public function __construct(PayPal $paypal)
    {
        $this->paypal = $paypal;
    }


    public function collectMoney($amount): bool
    {
        $result = $this->paypal->transfer('payments@myshop.com', $amount);
        return ($result === "Paypal Success!");
    }
}

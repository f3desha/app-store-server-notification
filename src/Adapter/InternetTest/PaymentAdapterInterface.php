<?php

namespace OOP\App\Adapter\InternetTest;

interface PaymentAdapterInterface
{
    /**
     * @param $amount
     * @return boolean
     */
    public function collectMoney($amount): bool;
}

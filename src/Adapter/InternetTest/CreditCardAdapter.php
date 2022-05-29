<?php

namespace OOP\App\Adapter\InternetTest;

class CreditCardAdapter implements PaymentAdapterInterface
{
    /**
     * @var CreditCard $creditCard
     */
    private CreditCard $creditCard;

    /**
     * @param CreditCard $creditCard
     */
    public function __construct(CreditCard $creditCard)
    {
        $this->creditCard = $creditCard;
    }

    public function collectMoney($amount): bool
    {
        $result = $this->creditCard->authorizeTransaction($amount);
        return strpos($result, 'Authorization') === 0;
    }
}

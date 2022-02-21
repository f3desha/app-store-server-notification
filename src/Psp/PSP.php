<?php
namespace Kilohealth\App\Psp;

use Kilohealth\App\Subscription\SubscriptionManager;

abstract class PSP {
    private $subscription;

    public function __construct(SubscriptionManager $subscriptionManager) {
        $this->subscription = $subscriptionManager->getSubscription();
    }

    public function subscribe() {
        $this->subscription->turnOn();
    }

    public function unsubscribe() {
        $this->subscription->turnOff();
    }
}
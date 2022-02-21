<?php

namespace Kilohealth\App\Subscription;

use Kilohealth\App\SubscriptionStorage\DBSubscriptionStorage;
use Kilohealth\App\SubscriptionStorage\FileSubscriptionStorage;

class SubscriptionManager  {

    private $subscription;

    public function __construct() {
        $this->subscription = new Subscription(new FileSubscriptionStorage());
    }

    public function getSubscription()
    {
        return $this->subscription;
    }
}
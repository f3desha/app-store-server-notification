<?php

namespace Kilohealth\App;

use Kilohealth\App\Subscription\SubscriptionManager;

class Application {

    private $subscriptionManager;

    public function __construct(SubscriptionManager $subscriptionManager) {
        $this->subscriptionManager = $subscriptionManager;
    }

    public function runFreeFeature(){
        echo "Executed free feature\n";
    }

    public function runForAFeeFeature(){
            if($this->subscriptionManager->getSubscription()->isActive()){
                echo "Executed feature for a fee\n";
            } else {
                echo "Cant execute feature for a fee\n";
            }
    }

}
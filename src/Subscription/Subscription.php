<?php

namespace Kilohealth\App\Subscription;

use Kilohealth\App\SubscriptionStorage\SubscriptionStorage;
use Kilohealth\App\Switchable;

class Subscription implements Switchable {

    private $active;
    private $subscriptionStorage;

    public function __construct(SubscriptionStorage $subscriptionStorage) {
        $this->subscriptionStorage = $subscriptionStorage;
        $this->readSubscription();
    }

    private function readSubscription(){
        if($this->subscriptionStorage->read()){
            $this->active = true;
        } else {
            $this->active = false;
        }
    }

    public function turnOn() {
        $this->subscriptionStorage->write('1');
        $this->readSubscription();
    }

    public function turnOff() {
        $this->subscriptionStorage->write('0');
        $this->readSubscription();
    }

    public function isActive(): bool {
        return $this->active;
    }

}
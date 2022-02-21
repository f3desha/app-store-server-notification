<?php
require __DIR__ . '/vendor/autoload.php';
use Kilohealth\App\Application;
use Kilohealth\App\Subscription\SubscriptionManager;

$app = new Application(new SubscriptionManager());
$app->runFreeFeature();
$app->runForAFeeFeature();
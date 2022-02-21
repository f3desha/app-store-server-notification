<?php
header('Content-Type: application/json');

require __DIR__ . '/../vendor/autoload.php';
use Kilohealth\App\Subscription\SubscriptionManager;
use Kilohealth\App\Psp\AppleStoreWebhookHandler;

if ($json = json_decode(file_get_contents("php://input"), true)) {
    $data = $json;
}

$psp = new AppleStoreWebhookHandler(new SubscriptionManager());
$psp->parse($data);
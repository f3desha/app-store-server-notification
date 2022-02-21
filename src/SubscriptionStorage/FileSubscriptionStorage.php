<?php

namespace Kilohealth\App\SubscriptionStorage;

class FileSubscriptionStorage extends SubscriptionStorage {
    public function read() {
        $isActive = file_get_contents(__DIR__ . '/FileStorage.txt', true);
        return (bool)$isActive;
    }

    public function write(int $value) {
        file_put_contents(__DIR__ . '/FileStorage.txt', $value);
    }

}
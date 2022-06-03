<?php

use OOP\App\ExamplerSandbox\Core\Application;
use OOP\App\ExamplerSandbox\Core\WebApplication;

require __DIR__ . '/../vendor/autoload.php';

$config = [
    'mode' => WebApplication::MODE
];

$app = Application::build($config);
$app->run();

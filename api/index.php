<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}

// Ubah baris ini:
require __DIR__.'/../vendor/autoload.php';

// Ubah baris ini:
$app = require __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());

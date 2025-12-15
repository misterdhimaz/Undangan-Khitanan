<?php

// api/index.php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

// Menangani request dari Vercel
$request = Illuminate\Http\Request::capture();
$response = $app->handle($request);

$response->send();
$app->terminate();

<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
echo json_encode(\App\Models\Order::select('id', 'user_id', 'email', 'order_number')->get(), JSON_PRETTY_PRINT);

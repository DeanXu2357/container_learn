<?php

require __DIR__ . '/vendor/autoload.php';

use App\container\BasicContainer;
use App\deliver\BlackCat;
use App\Order;

// echo 'success';
$deliver = new BlackCat();
$order = new Order($deliver);

echo($order->showDeliverType());

<?php

declare(strict_types=1);

require_once 'vendor/autoload.php';

use FactoryMetody\Logistics\Application;
use FactoryMetody\Logistics\Config;

$app = new Application();
$transporte = $app(Config::SEALOGISTICA);
//$transporte = $app(Config::SEALOGISTICA);

echo $transporte->planDelivery();
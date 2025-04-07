<?php

error_reporting(E_ALL & ~E_DEPRECATED);

require __DIR__ . '/../vendor/autoload.php';

use App\Core\Bootstrap;

$bootstrap = new Bootstrap();
$bootstrap->run();

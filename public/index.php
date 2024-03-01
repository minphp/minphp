<?php

require __DIR__ . '/../vendor/autoload.php';

$routes = require(__DIR__ . '/../routes/web.php');

(new MinPhp\Core\Kernel())->run($routes);


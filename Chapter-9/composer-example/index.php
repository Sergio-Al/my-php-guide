<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Main\Example;

$logger = new Logger('application_log');
$logger->pushHandler(new StreamHandler('./logs/app.log', Logger::INFO));

$e = new Example($logger);
$e->doSomething();
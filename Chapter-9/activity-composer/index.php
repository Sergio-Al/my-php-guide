<?php
require 'vendor/autoload.php';

// Remember if you gonna change the use Main\Example from 
// composer.json 'psr-4' for other name, you must regenerate the 
// vendor/autoload.php file, i regenerate deleting that file
// and write in command > composer install, if this doesn't work
// remove all the vendor folder and write > composer install again

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Main\Example;

$logger = new Logger('application_log');
$logger->pushHandler(new StreamHandler('./logs/app.log', Logger::INFO));

$e = new Example($logger);
$e->doSomething();
$e->printUuid();

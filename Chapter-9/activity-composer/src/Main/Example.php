<?php

namespace Main;

use Monolog\Logger;
use Ramsey\Uuid\Uuid;

class Example
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        echo "PHP is this activity" . PHP_EOL;

        $this->logger->info("this is an informational message");
        $this->logger->error("This message logs an error condition");
        $this->logger->critical("this message logs unexpected exceptions");
    }

    public function printUuid()
    {
        $uuid = Uuid::uuid4()->toString();

        echo PHP_EOL . 'this is you uuid: ' . PHP_EOL . $uuid;
    }
}

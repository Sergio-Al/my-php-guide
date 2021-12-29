<?php

namespace Main;

use Monolog\Logger;

class Example
{
    protected $logger;
    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        echo "PHP is old!" . PHP_EOL;

        $this->logger->info("this is an informational message");
        $this->logger->error("This message logs an error condition");
        $this->logger->critical("this message logs unexpected exceptions");
    }
}

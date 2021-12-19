<?php
$a = 15;

$callable = function() use (&$a){ // if you just pass like 'use ($a)' the $a variable will be captured as it was at the time of function creation
                                  // if you want reference use 'use (&$a)'
    return $a;
};
$a = 'different';

echo $callable();
echo PHP_EOL;

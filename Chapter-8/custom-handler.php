<?php

// we define the error handler
$errorHandler = function (
    int $code,
    string $message,
    string $file,
    int $line
) {
    echo date(DATE_W3C), " :: $message, in [$file] on line [$line] (error code $code)", PHP_EOL;
};

// we register the error handler using set_error_handler function
set_error_handler($errorHandler, E_ALL);

// we write an expression that should trigger some error
echo $width / $height, PHP_EOL;

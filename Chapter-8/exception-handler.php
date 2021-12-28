<?php
// we register the exception handler which is an anonymous function that accepts a throwable parameter
set_exception_handler(function (throwable $e) {
    $msgLength = mb_strlen($e->getMessage());
    $line = str_repeat('-', $msgLength);
    echo $line, PHP_EOL;
    echo $e->getMessage(), PHP_EOL;
    echo '> file ', $e->getFile(), PHP_EOL;
    echo '> line ', $e->getLine(), PHP_EOL;
    echo '> trace ', PHP_EOL, $e->getTraceAsString(), PHP_EOL;
    echo $line, PHP_EOL;
});

// you can test this with the following command
    //> php basic-try-handler.php DateTimeZone;

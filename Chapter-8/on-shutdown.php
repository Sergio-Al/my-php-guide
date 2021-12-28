<?php
$errorHandler = require_once 'error-handler.php';

register_shutdown_function(
    function () use ($errorHandler) {
        if ($error = error_get_last()) {
            if (in_array($error['type'], [E_ERROR, E_RECOVERABLE_ERROR], true)) {
                $errorHandler(
                    $error['type'],
                    $error['message'],
                    $error['file'],
                    $error['line']
                );
                }
        }
    }
);

// this will print an thorwable error (an exception) printed by the default exception handler and our converted error
new UnknownClass();
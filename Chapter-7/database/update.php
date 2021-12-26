<?php

/** @var PDO $pdo */
$pdo = require 'connection.php';
$updateId = $argv[1] ?? 0;
$updateEmail = $argv[2] ?? '';

// we prepare the UPDATE statement using two placeholders -id and email
$updateStmt = $pdo->prepare("UPDATE users SET email = :email WHERE id = :id");

// we execute the UPDATE statement
if ($updateStmt->execute([':id' => $updateId, ':email' => $updateEmail]) === false) {
    list(,, $driverErrMsg) = $updateStmt->errorInfo();
    echo "Error running the query: $driverErrMsg" . PHP_EOL;
    return;
}

echo sprintf("The query ran successfully. %d row(s) were affected.", $updateStmt->rowCount()) . PHP_EOL;

// use this to test in a command line:
    // > php update.php 5 john.doe@mail.com
    // the user with id = 5 will be updated
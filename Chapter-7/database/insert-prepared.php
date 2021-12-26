<?php
// A prepared statement will prevent sql injections to our database.
/** @var PDO $pdo */

$pdo = require 'connection.php';
$insertStmt = $pdo->prepare("INSERT INTO users (email) VALUES (:email)");

if ($insertStmt->execute([':email' => $argv[1] ?? null]) === false) {
    list(,, $driverErrMsg) = $insertStmt->errorInfo();
    echo "Error inserting into the users table: $driverErrMsg" . PHP_EOL;
    return;
}

echo "Successfully inserted into users table" . PHP_EOL;

// for test a sql injection run this command:
    // > php insert-prepared.php '""); DROP TABLE users; /**'
    // this command will not work because we are protected against sql injections
    // this command will delete a database if we test in our insert.php file, because is prone to SQL INJECTIONS
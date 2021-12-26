<?php
// WARNING!!!! this script is prone to sql injection, to prevent this we have another file insert-prepared.php that prevents sql injections, take a look!
/** @var PDO $pdo */
$pdo = require 'connection.php';
$insertStmt = "INSERT INTO users (email) VALUES ('john.smith@mail.com')";

// we test if the data was inserted successfully
if ($pdo->exec($insertStmt) === false) {
    list(,, $driverErrMsg) = $pdo->errorInfo();
    echo "Error inserting into the users table: $driverErrMsg" . PHP_EOL;
    return;
}

echo "Successfully inserted into users table the record with id " . $pdo->lastInsertId() . PHP_EOL;

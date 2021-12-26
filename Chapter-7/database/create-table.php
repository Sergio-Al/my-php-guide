<?php

/** @var PDO $pdo */
$pdo = require 'connection.php';
$createStmt = "CREATE TABLE
    users 
    (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        email VARCHAR(254) NOT NULL UNIQUE,
        signup_time DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL
    )";

// executing the action
if ($pdo->exec($createStmt) === false) {
    list(,, $driveErrMsg) = $pdo->errorInfo();
    echo "Error creating the users table: $driverErrMsg" . PHP_EOL;
    return;
}

echo "The users table was successfully created.";

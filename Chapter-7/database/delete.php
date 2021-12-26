<?php

/** @var PDO $pdo */
$pdo = require 'connection.php';
$partialMatch = $argv[1] ?? '';

$deleteStmt = $pdo->prepare("DELETE FROM users WHERE email LIKE :partialMatch");

// executing the statement 
if ($deleteStmt->execute([':partialMatch' => "%$partialMatch%"]) === false) { // with %value% we are using regular expressions of SQL, search on internet for more info
    list(,, $driveErrMsg) = $deleteStmt->errorInfo();
    echo "Error deleting from the users table: $driverErrMsg" . PHP_EOL;
    return;
}

// we ensure that at least 1 row was deleted, otherwise we print an erro message
if ($rowCount = $deleteStmt->rowCount()) {
    echo sprintf("Successfully deleted %d records matching '%s' from users table.", $rowCount, $partialMatch) . PHP_EOL;
} else {
    echo sprintf("No records matching '%s' were found in users table.", $partialMatch) . PHP_EOL;
}

// we can test the file with the following commands:
    // >php delete.php smith
    // this will delete data with email matching smith at any site. If this fail the error will be displayed.

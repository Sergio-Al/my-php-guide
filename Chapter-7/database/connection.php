<?php
// $dsn = "mysql:host=localhost;port=3306;charset=utf8mb4";

// $options = [
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// ];

// // we invoke the pdo object
// $pdo = new PDO($dsn, "root", "putYourPassword", $options);

// // print the connection info
// echo sprintf("Connected to MySQL server v%s, on %s", $pdo->getAttribute(PDO::ATTR_SERVER_VERSION), $pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS));


// THIS WAS COPIED FROM connection-no-db.php i'll use this from this point
$dsn = "mysql:host=localhost;port=3306;dbname=demo;charset=utf8mb4";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

$pdo = new PDO($dsn, "root", "putYourPassword", $options);

return $pdo;

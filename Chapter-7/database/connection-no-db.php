<?php
// this connection file has not database selected, we can create a database importing this file to another file.
$dsn = "mysql:host=localhost;port=3306;charset=utf8mb4";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

$pdo = new PDO($dsn, "root", "putYourPassword", $options);

return $pdo;

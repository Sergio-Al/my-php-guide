<?php
$filePath = __DIR__ . '/sample/users_list.csv';
$fileResource = fopen($filePath, 'r');
if ($fileResource === false) {
    exit(sprintf('Cannot read [%s] file', $filePath));
}

$readLength = 64;
$iterations = 0; // this is not necessary for production grade code, this is only for educational purposes

while (!feof($fileResource)) {
    $iterations++;
    $chunk = fread($fileResource, $readLength);
    echo $chunk;
}

fclose($fileResource);
echo sprintf("\n%d iteration(s)", $iterations);

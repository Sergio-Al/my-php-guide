<?php
$filePath = __DIR__ . DIRECTORY_SEPARATOR . $argv[1];
$fileResource = fopen($filePath, 'r');

// if the resource is invalid the script will be terminated
if ($fileResource === false) {
    exit(sprintf('Cannot read [%s] file.', $filePath));
}

$readLength = $argv[2] ?? 4096; // length in bytes
$iterations = 0;

while (!feof($fileResource)) {
    $iterations++;
    fread($fileResource, $readLength);
}

fclose($fileResource);
echo sprintf("--\n%d iteration(s): memory %.2fMB\n--\n", $iterations, memory_get_peak_usage(true) / 1024 / 1024);

// in this script we are reading chunks of data one at a time from the file. using the $readLength variable.
// for test run this file as follows (in a unix-based bash):
    // > time php fread-memory.php sample/test-10mb.txt
    // you'll see many iterations in chunks of data 
    // > time php fread-memory.php sample/test-10mb.txt 1048576
    // the last 1048576 is for read in chunks of 1MB istead the default 4KB (4096 on line 10)
    // i'd recomment to test with test-256mb.txt file too
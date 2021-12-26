<?php
// the first approach with fwrite() function 
$fileFwrite = 'sample/write-with-fwrite.txt';
$fp = fopen($fileFwrite, 'w+');
$written = fwrite($fp, 'File written with fwrite().' . PHP_EOL);

if (false === $written) {
    echo 'Error writing with fwrite' . PHP_EOL;
} else {
    echo sprintf("> Successfully written %d bytes to [%s] with fwrite():", $written, $fileFwrite) . PHP_EOL;
    fseek($fp, 0);
    echo fread($fp, filesize($fileFwrite)) . PHP_EOL;
}

// the second approach with file_put_contents()
$fileFpc = 'sample/write-with-fpc.txt';
$written = file_put_contents($fileFpc, 'File written with file_put_contents().' . PHP_EOL);


if (false === $written) {
    echo 'Error writing with fwrite' . PHP_EOL;
} else {
    echo sprintf("> Successfully written %d bytes to [%s] with file_put_contents():", $written, $fileFwrite) . PHP_EOL;
    echo file_get_contents($fileFpc) . PHP_EOL;
}

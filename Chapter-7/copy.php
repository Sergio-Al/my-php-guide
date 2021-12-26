<?php
// copy files, the original file path is  /sample/to-copy.txt
// if the destination already exists it will be overwritten
$sourceFilePath = 'sample/to-copy.txt';
$targetFilePath = 'sample/to-copy.txt.bak';
if (!is_file($sourceFilePath)) {
    echo sprintf('The [%s] file does not exist.', $sourceFilePath) . PHP_EOL;
    return;
}

if (copy($sourceFilePath, $targetFilePath)) {
    echo sprintf('The [%s] file was copied as [%s].', $sourceFilePath, $targetFilePath) . PHP_EOL;
} else {
    echo sprintf('The [%s] file cannot be copied as [%s].', $sourceFilePath, $targetFilePath) . PHP_EOL;
}

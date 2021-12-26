<?php
$filePath = 'sample/to-move.txt'; // target file to be moved
$targetDirectory = 'sample/archive/2021'; // target directory to moved to

// we ensure that our $filePath is a file
if (!is_file($filePath)) {
    echo sprintf('the [%s] file does not exist.', $filePath) . PHP_EOL;
    return;
}

// we create the directory if isn't exists
if (!is_dir($targetDirectory)) {
    echo sprintf('The target directory [%s] does not exits. Will create...', $targetDirectory);
    if (!mkdir($targetDirectory, 0777, true)) {
        echo sprintf('The target directory [%s] cannot be created', $targetDirectory) . PHP_EOL;
        return;
    }
    echo 'Done.' . PHP_EOL;
}

//  we will define the target file path. and this will comprise the target directory and the file base name.
$targetFilePath = $targetDirectory . DIRECTORY_SEPARATOR . basename($filePath);
if (rename($filePath, $targetFilePath)) {
    echo sprintf('The [%s] file was moved in [%s].', basename($filePath), $targetDirectory) . PHP_EOL;
} else {
    echo sprintf('The [%s] file cannot be moved in [%s].', basename($filePath), $targetDirectory) . PHP_EOL;
}
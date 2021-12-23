<?php
$uploadsDir = __DIR__ . DIRECTORY_SEPARATOR . 'uploads';
$targetFilename = $uploadsDir . DIRECTORY_SEPARATOR . 'my-image.png';
$relativeFilename = substr($targetFilename, strlen(__DIR__));

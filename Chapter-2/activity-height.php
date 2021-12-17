<?php
// get all arguments
$name = $argv[1];
$heightMeters = (int) $argv[2];
$heightCentimeters = (int) $argv[3];

// convert centimeters to meters
$cmToMeter = (float)($heightCentimeters / 100);

$finalHeightMeters = $heightMeters + $cmToMeter;

// displaying the output
echo $name . ': ' . $finalHeightMeters . 'm ';

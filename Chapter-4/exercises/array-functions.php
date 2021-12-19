<?php
$signal = ['red', 'amber', 'green'];
print_r($signal);

$reversed = array_reverse($signal, $preserve_keys = true);
print_r($reversed);

print_r($signal);

$streets = [
    'walbrook',
    'Moorgate', // starts with an uppercase
    'crosswall',
    'lothbury',
];

// this sorts the string case-insensitively
sort($streets, SORT_STRING | SORT_FLAG_CASE);
print_r($streets);

// printing the words that start with uppercase at the top of the array
sort($streets, SORT_STRING &  SORT_FLAG_CASE);
print_r($streets);

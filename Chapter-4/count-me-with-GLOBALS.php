<?php
// we are in global scope here
$count = 0;

/**
 * This function increments the global
 * $count variable each time is called
 */
function countMe() {
    $GLOBALS['count']++;
}

// call the function countMe once
countMe();
// and twice
countMe();

echo $count;
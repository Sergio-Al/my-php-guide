<?php
// get_loaded_extensions is called without arguments
// the array returned from it is stored in the variable $extensions
$extensions = get_loaded_extensions();

// The variable $extensions is then offered as the first argument to print_r
// print_r prints the array in a human readable form
print_r($extensions);
<?php
$a = 9;
$b = 9;

if($a - $b){
    // my inner sentence;
    if ($a > $b){
        $difference = $a - $b;
    } else {
        $difference = $b - $a;
    }
    print("The difference is $difference");
} else {
    print("The numbers are equal");
}
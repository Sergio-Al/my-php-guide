<?php

$str = 'You order total is:';

$order = 20;
$additional = 5;
$orderTotal = 0;
$complete = false;

// adding additional items to order
$orderTotal = $order + $additional;

// if order is equal to 25
if ($orderTotal >= 25) {
    // change $complete to true to indicate the order
    // is complete
    $complete = true;
    // Display the $str and add the orderTotal
    echo $str . $orderTotal;
}

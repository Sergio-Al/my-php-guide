<?php
$days = [
    "Saturday",
    "Sunday",
    "Monday",
    "Tuesday",
    "wednesday",
    "Thursday",
    "Friday"
];

$totalDays = count($days);
for ($i = 0; $i < $totalDays; $i++) {
    echo $days[$i] . " ";
}

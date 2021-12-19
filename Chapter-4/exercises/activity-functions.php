<?php
$directors = [
    "steven-spielberg" => [
        "ready player one",
        "munich",
        "fighter squad",
        "firelight",
        "duel"
    ],
    "christopher-nolan" => [
        "following",
        "memento",
        "inception",
        "interstellar",
        "Dunkirk"
    ],
    "martin-scorsese" => [
        "mean streets",
        "taxi driver",
        "after hours",
        "kundun",
        "goodfellas"
    ],
    "quentin-tarantino" => [
        "the romance",
        "iron monkey",
        "killing zone",
        "curdled",
        "alias"
    ],
    "wes-anderson" => [
        "rushmore",
        "hotel chevalier",
        "isle of dogs",
        "moonrise kingdom",
        "the darjeeling limited"
    ]
];

function processDirectorName($name) {
    $nameParts = explode('-', $name);
    $firstName = ucfirst($nameParts[0]);
    $lastName = strtoupper($nameParts[1]);
    return "$firstName $lastName";
}

function processMovies($movies){
    $formattedStrings = [];
    for($i = 0; $i < count($movies); $i++){
        $formattedStrings[] = '"' . strtoupper($movies[$i]) . '"';
    }

    return implode(",", $formattedStrings);
}

ksort($directors);
foreach($directors as $key => $value) {
    echo processDirectorName($key) . ": ";
    echo processMovies($value);
    echo PHP_EOL;
}



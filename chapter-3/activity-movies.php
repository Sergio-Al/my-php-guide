<?php
// $directorMovies = [
//     [
//         "director" => "Steven Spielberg",
//         "movies" => [
//             "ready player one",
//             "munich",
//             "fighter squad",
//             "firelight",
//             "duel"
//         ]
//     ],
//     [
//         "director" => "Christopher Nolan",
//         "movies" => [
//             "following",
//             "memento",
//             "inception",
//             "interstellar",
//             "Dunkirk"
//         ]
//     ],
//     [
//         "director" => "Martin Scorsese",
//         "movies" => [
//             "mean streets",
//             "taxi driver",
//             "after hours",
//             "kundun",
//             "goodfellas"
//         ]
//     ],
//     [
//         "director" => "Quentin Tarantino",
//         "movies" => [
//             "the romance",
//             "iron monkey",
//             "killing zone",
//             "curdled",
//             "alias"
//         ]
//     ],
//     [
//         "director" => "Wes Anderson",
//         "movies" => [
//             "rushmore",
//             "hotel chevalier",
//             "isle of dogs",
//             "moonrise kingdom",
//             "the darjeeling limited"
//         ]
//     ]
// ];

// $limitDirectors = ($argv[1] ?? count($directorMovies)) - 1;

// for ($i = 0; $i <= $limitDirectors; $i++) {
//     print $directorMovies[$i]["director"] . " \n";
//     $limitMovies = ($argv[2] ?? count($directorMovies[$i]["movies"])) - 1;
//     for ($j = 0; $j <= $limitMovies; $j++) {
//         print " " . $directorMovies[$i]["movies"][$j] . " \n";
//     }
// }


// Another form

$directorMovies2 = [
    "Steven Spielberg" => [
        "ready player one",
        "munich",
        "fighter squad",
        "firelight",
        "duel"
    ],
    "Christopher Nolan" => [
        "following",
        "memento",
        "inception",
        "interstellar",
        "Dunkirk"
    ],
    "Martin Scorsese" => [
        "mean streets",
        "taxi driver",
        "after hours",
        "kundun",
        "goodfellas"
    ],
    "Quentin Tarantino" => [
        "the romance",
        "iron monkey",
        "killing zone",
        "curdled",
        "alias"
    ],
    "Wes Anderson" => [
        "rushmore",
        "hotel chevalier",
        "isle of dogs",
        "moonrise kingdom",
        "the darjeeling limited"
    ]
];

$printedDirectors = 0;
foreach ($directorMovies2 as $director => $movies) { // Remember! our $movies convert the actual object as index.
    if ($printedDirectors >= ($argv[1] ?? count($directorMovies2))) {
        break;
    }
    print $director . PHP_EOL;
    $printedMovies = 0;
    $printedDirectors++;
    foreach ($movies as $movie) {
        if ($printedMovies >= ($argv[2] ?? count($movies))) {
            break;
        }
        print " >" . $movie . PHP_EOL;
    }
}

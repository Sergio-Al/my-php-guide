<?php
$professions = ["Doctor", "Teacher", "Programmer", "Lawyer", "Athlete"];
$subjects = [
    "Mathematics",
    "Computer Programming",
    "Business English",
    "Graph Theory"
];

// The first way, my favorite
// foreach ($professions as $profession) {
//     echo "The profession is $profession" . PHP_EOL;
//     if ($profession === 'Teacher') {
//         foreach ($subjects as $name) {
//             echo "$name " . PHP_EOL;
//         }
//     }
// }

// Another way
$totalSubjects = sizeof($subjects);
foreach ($professions as $profession) {
    echo "The profession is $profession." . PHP_EOL;
    for ($i = 0; $profession === 'Teacher' && $i < $totalSubjects; $i++) {
        echo " " . $subjects[$i] . PHP_EOL;
    }
}

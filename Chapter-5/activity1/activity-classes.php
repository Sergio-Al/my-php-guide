<?php
spl_autoload_register(); // more info on Car.php

$professor = new Professor\Professor('Charles Kinsfield', array(
    new Student\Student('Elwin Ransom'),
    new Student\Student('Maurice Phipps'),
    new Student\Student('James Dunworthy'),
    new Student\Student('Alecto Carrow'),
));

$professor->setTitle("Dr. ");
$professor->printStudents();


<?php

namespace Professor;

use Student\Student; // we import the Student class via the Student namespace in Professor.php

class Professor
{
    public $name;
    public $title = 'Prof. ';
    private $students = array();

    function __construct(string $name, array $students)
    {
        $this->name = $name;

        foreach ($students as $student) {
            if ($student instanceof Student) {
                // only valid students can be added to the professor's student list
                $this->students[]  = $student; // adding values to the array
            }
        }
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function printStudents()
    {
        echo "$this->title $this->name's students (" . count($this->students) . "): " . PHP_EOL;
        $serial  = 1;
        foreach ($this->students as $student) {
            echo "$serial $student->name " . PHP_EOL;
            $serial++;
        }
    }
}

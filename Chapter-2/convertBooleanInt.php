<?php
echo '<h3>Booelan to int</h3>';
$trueValueBool = true;
$falseValueBool = false;

echo '<h3>Before conversion:</h3>';
var_dump($trueValueBool);
echo '<br>';
var_dump($falseValueBool);

echo '<h3>After type conversion:</h3>';
$trueValueInt = (int) ($trueValueBool);
$falseValueInt = (int) ($falseValueBool);
var_dump($trueValueInt);
echo '<br>';
var_dump($falseValueInt);

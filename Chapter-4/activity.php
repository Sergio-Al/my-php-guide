<?php

declare(strict_types=1);

function factorial(int $number)
{
    $factorial = $number;

    while ($number > 2) {
        $number--;
        $factorial *= $number;
    }

    return $factorial;
}

/**
 * Return the sum of its inputs.
 * Give as many inputs as you like.
 * 
 * @return float
 * 
 */
function sum(): float
{
    return array_sum(func_get_args());
}

function prime(int $number)
{
    // everything equal or smaller than 2 is not a prime number
    if (2 >= $number) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function performOperation(string $operation)
{
    switch ($operation) {
        case 'factorial':
            // get in the second parameter, it must be an int.
            // we will cast it to int to be sure
            $number = (int) func_get_arg(1);
            return factorial($number);
        case 'sum':
            // get all parameters
            $params = func_get_args();
            // remove the first parameter, because it is the operation
            array_shift($params);
            return call_user_func_array('sum', $params);
        case 'prime':
            $number = (int) func_get_arg(1);
            return prime($number);
    }
}


echo performOperation("factorial", 3) . PHP_EOL;
echo performOperation("sum", 2, 2, 2) . PHP_EOL;
echo (performOperation('prime', 3)) ?
    "The number you entered was prime" . PHP_EOL :
    "The number you entered was not prime." . PHP_EOL;

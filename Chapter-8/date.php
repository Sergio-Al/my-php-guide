<?php
require_once 'all-errors-handler.php';
class Disposable extends Exception
{
}

function handle(array $input)
{
    if (!isset($input[1])) {
        throw new Disposable('A class name is required as the first argument (one of DateTime or DateTimeImmutable).');
    }
    $calleeName = $input[1];
    if (!in_array($calleeName, [DateTime::class, DateTimeImmutable::class])) {
        throw new Disposable('One of DateTime or DateTimeImmutable is expected.');
    }
    $time = $input[2] ?? 'now';
    $timeZone = $input[3] ?? 'UTC';

    try {
        $dateTimeZone = new DateTimeZone($timeZone);
    } catch (Exception $e) {
        throw new Disposable(sprintf('Unknown/Bad timezone: [%s]', $timeZone));
    }

    try {
        $dateTime = new $calleeName($time, $dateTimeZone);
    } catch (Exception $e) {
        throw new Disposable(sprintf('Cannot build date from [%s]', $time));
    }

    return $dateTime;
}

try {
    $output = handle($argv);
    echo 'Result: ',
    print_r($output, true);
} catch (Disposable $e) {
    echo '(!) ', $e->getMessage(), PHP_EOL;
    exit(1);
}

// test running :
    // > php date.php
    // > php date.php Date; //Caught the Disposable exception
    // > php date.php DateTimeImmutable midnight;
    // > php date.php DateTimeImmutable summer;
    // > php date.php DateTimeImmutable yesterday Paris; // Exception class exceptions caught inside the handle() function, and then thrown as Disposable exceptions 
    // > php date.php DateTimeImmutable yesterday Europe/Paris;

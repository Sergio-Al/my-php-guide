<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$myFirst = 'Sergio';
$myLast = 'Example';

$client = new Client(['base_uri' => 'https://httpbin.org/']);
$requestBody = json_encode(['first' => 'Sergio', 'last' => 'Example']);

try {
    $response = $client->request('POST', "/response-headers", [
        'headers' => [
            'Accept' => 'application/json'
        ],
        'query' => [
            'first' => $myFirst,
            'last' => $myLast
        ],
        'verify' => false // DON'T DO THIS ON PRODUCITON MORE INFO spamcheck.php
    ]);

    if ($response->getStatusCode() !== 200) {
        throw new Exception("Status code was {$response->getStatusCode()}, not 200");
    }

    $responseObject = json_decode($response->getBody()->getContents());

    echo "The web service responded with {$responseObject->first} and {$responseObject->last}" . PHP_EOL;
} catch (Exception $ex) {
    echo "an error ocurred: " . $ex->getMessage() . PHP_EOL;
}

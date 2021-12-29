<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$email = 'john.doe@example.com';

$client = new Client(['base_uri' => 'https://spamcheck.postmarkapp.com/']);
$requestBody = json_encode(['email' => $email, 'options' => 'short']);

// trycatch to make a POST request to the /filter endpoint
try {
    $response = $client->request('POST', '/filter', [
        'headers' => [
            'Accept' => 'application/json'
        ],
        'body' => $requestBody,
        'verify' => false // Avoiding SSL Certificate, DONT USE THIS IN PRODUCTION IT'S NOT SAFE!
    ]);

    if ($response->getStatusCode() !== 200) {
        throw new Exception("Status code was {$response->getStatusCode()}, not 200");
    }

    // parsing the JSON string response into an object and storing in a variable
    $responseObject = json_decode($response->getBody()->getContents());

    if ($responseObject->success !== true) {
        throw new Exception("Service returned an unsuccessful response: {$responseObject->message}");
    }

    echo "The SpamAssassin score for email {$email} is {$responseObject->score}" . PHP_EOL;
} catch (Exception $ex) {
    echo "An error ocurred: " . $ex->getMessage() . PHP_EOL;
}

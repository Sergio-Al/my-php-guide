<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client(['base_uri' => 'https://api.ipify.org/']);

$response = $client->request('GET', '/', [
    'query' => ['format' => 'json'],
    'verify' => false // avoiding cURL ssl protection DON'T USE THIS IN PRODUCTION IT'S NOT SAFE!
]);

$responseObject = json_decode($response->getBody()->getContents());
echo PHP_EOL . '-----------------------------------------------------------------' . PHP_EOL;
echo print_r($responseObject) . PHP_EOL; // Object of class stdClass
echo PHP_EOL . '-----------------------------------------------------------------' . PHP_EOL;
echo "You public facing ip address is  {$responseObject->ip}" . PHP_EOL;


// other way
// use GuzzleHttp\Client;

// $client = new \GuzzleHttp\Client();
// $response = $client->request('GET', 'https://api.ipify.org/');

// echo $response->getStatusCode();
// echo $response->getHeaderLine('content-type');
// echo $response->getBody();


// another way, this worked! 1st 
// $client =  new \GuzzleHttp\Client();
// $response = $client->request(
//     'GET',
//     'https://api.ipify.org',
//     [
//         'verify' => false,
//     ]
// );

// echo $response->getBody();

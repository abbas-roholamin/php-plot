<?php

require __DIR__ . "/vendor/autoload.php";


// INSTANTIOATE QUZZLE
$client = new GuzzleHttp\Client();

// GET REQUEST
// $response = $client->get("https://jsonplaceholder.typicode.com/albums/1");


// PATCH REQUEST
$payload = json_encode([
"title" => "Updated title"
]);

$headers = [
"Content-type" => "application/json; charset=UTF-8"
];

$response = $client->patch(
    "https://jsonplaceholder.typicode.com/albums/1",
    [
        "headers" => $headers,
        "body" => $payload
    ]);

var_dump($response->getStatusCode());

var_dump($response->getHeader("Content-type"));

var_dump((string) $response->getBody());
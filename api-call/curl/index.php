<?php 

// REQUEST BODY
$payload = json_encode([
    "title" => "Updated title"
]);

// REQUEST HEADERS
$headers = [
    "Content-type: application/json; charset=UTF-8",
    "Accept-language: en"
];

// INIT CURL
$ch = curl_init();

// SET OPTIONS SEPERATLY AND SEND GET REQUEST
/*
curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/albums/1");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
*/

// SET OPTIONS AT ONCE AND SEND PATCH REQUEST
curl_setopt_array($ch, [
    CURLOPT_URL => "https://jsonplaceholder.typicode.com/albums/1",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "PATCH",
    CURLOPT_POSTFIELDS => $payload,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_HEADER => true
]);

// EXCUTE REQUEST
$data = curl_exec($ch);

// GET REQUEST INFO (STATUS CODE)
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// CLOSE REQUEST
curl_close($ch);

var_dump($data);
var_dump($status_code);
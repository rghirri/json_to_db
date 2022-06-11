<?php
require __DIR__ . "/vendor/autoload.php";

$payload = json_encode([
   "title" => "Hello title"
]);

$headers = [
  "Content-type" => "application/json; charset=UTF-8"
];

$client = new GuzzleHttp\Client();

$response = $client->patch("https://jsonplaceholder.typicode.com/albums/1", [
   "headers" => $headers,
   "body"    => $payload
]);

var_dump($response->getStatusCode());

var_dump($response->getHeader("Content-type"));

var_dump((string) $response->getBody());
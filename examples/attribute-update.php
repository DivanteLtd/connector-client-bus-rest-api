<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Divante\Connector\Bus\ApiClient;

$api = new ApiClient([
    'apiUrl' => 'http://example.com',
    'apiKey' => 'generate your own api token'
]);

/**
 * @var GuzzleHttp\Command\Result $results
 */
$results = $api->pimcore()->attribute()->update([
    'id' => 123,
    'name' => 'Example attribute2'
]);

print_r($results->toArray());

/*
 Results:
    Array (
        [status] => added
    )
*/

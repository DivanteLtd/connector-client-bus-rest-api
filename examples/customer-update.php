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
$results = $api->magento()->customer()->update([
    'id' => 123,
    'name' => 'No Name',
    'email' => 'example@domain.com'
]);

print_r($results->toArray());

/*
 Results:
    Array (
        [status] => added
    )
*/

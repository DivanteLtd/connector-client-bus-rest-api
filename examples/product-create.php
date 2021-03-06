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
$results = $api->pimcore()->product()->create([
    'id' => 123,
    'description' => 'Test description',
    'gift_message_available' => 1,
    'meta_description' => 'Test meta',
    'meta_keyword' => 'Test keyword',
    'meta_title' => 'Test title',
    'msrp' => 11.015000000000001,
    'msrp_display_actual_price_type' => 1,
    'msrp_enabled' => 1,
    'name' => 'Test',
    'news_from_date' => '02/16/2012',
    'news_to_date' => '16.02.2012',
    'options_container' => 'container1',
    'page_layout' => 'one_column',
    'price' => 25.5,
    'attribute_set_id' => '4',
    'short_description' => 'Test short description',
    'sku' => 'simple4f5490f31959f',
    'special_from_date' => '02/16/2012',
    'special_price' => 11.199999999999999,
    'special_to_date' => '03/17/2012',
    'status' => 1,
    'stock_data' => [ 'backorders' => 1,
        'enable_qty_increments' => 0,
        'is_in_stock' => 0,
        'is_qty_decimal' => 0,
        'manage_stock' => 1,
        'max_sale_qty' => 1,
        'min_qty' => 1.5600000000000001,
        'min_sale_qty' => 1,
        'notify_stock_qty' => -50.990000000000002,
        'qty' => 1,
        'use_config_manage_stock' => 1,
        'use_config_min_qty' => 1,
        'use_config_min_sale_qty'=> 1,
        'use_config_max_sale_qty' => 1,
        'use_config_backorders'=> 1,
        'use_config_enable_qty_inc'=>1,
        'use_config_notify_stock_qty'=>1 ],
    'tax_class_id' => '2',
    'type_id' => 'simple',
    'use_config_gift_message_available' => 0,
    'visibility' => '4',
    'weight' => 125
]);

print_r($results->toArray());

/*
 Results:
    Array (
        [status] => added
    )
*/

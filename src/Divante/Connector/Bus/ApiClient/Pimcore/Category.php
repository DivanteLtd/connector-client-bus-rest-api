<?php

namespace Divante\Connector\Bus\ApiClient\Pimcore;

use Divante\Connector\Bus\ApiClient\BaseClient;
use Divante\Connector\Bus\ApiClientAware;
use GuzzleHttp\Command\Guzzle\Description;

/**
 * Class Category
 * @package Divante\Connector\Bus\ApiClient\Pimcore
 */
class Category extends BaseClient implements ApiClientAware
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create (array $data)
    {
        return $this->getApiClient()->create($data);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function update (array $data)
    {
        return $this->getApiClient()->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function remove ($id)
    {
        return $this->getApiClient()->remove(['id' => $id]);
    }

    /**
     * @return Description
     */
    public function getApiDescription()
    {
        $productDefinition = [
            'name' => [
                'type' => 'string',
                'location' => 'json',
                'required' => true
            ],
            'parent_category' => [
                'type' => 'string',
                'location' => 'json',
                'required' => false
            ]
        ];

        return new Description([
            'baseUri' => $this->apiUrl,
            'apiVersion' => $this->getVersion(),
            'operations' => [
                'create' => [
                    'httpMethod' => 'POST',
                    'uri' => '/api/pimcore/category/create',
                    'responseModel' => 'getResponse',
                    'parameters' =>
                        array_merge($productDefinition, [
                            'id' => [
                                'type' => 'string',
                                'location' => 'json',
                                'required' => false
                            ]
                        ])
                ],
                'update' => [
                    'httpMethod' => 'PUT',
                    'uri' => '/api/pimcore/category/{id}/update',
                    'responseModel' => 'getResponse',
                    'parameters' =>
                        array_merge($productDefinition, [
                            'id' => [
                                'type' => 'string',
                                'location' => 'uri',
                                'required' => true
                            ]
                        ])
                ],
                'remove' => [
                    'httpMethod' => 'DELETE',
                    'uri' => '/api/pimcore/category/{id}/remove',
                    'responseModel' => 'getResponse',
                    'parameters' => [
                        'id' => [
                            'type' => 'string',
                            'location' => 'uri',
                            'required' => true
                        ]
                    ]
                ]
            ],

            'models' => [
                'getResponse' => [
                    'type' => 'object',
                    'additionalProperties' => [
                        'location' => 'json'
                    ]
                ]
            ]
        ]);
    }
}

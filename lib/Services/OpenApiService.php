<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class OpenApiService extends ApiService
{
    protected static array $endpoints        = [
        'getOpenapi'     => [
            '/openapi',
            'GET',
            'string',
        ],
        'getOpenapiJson' => [
            '/openapi.json',
            'GET',
            'string',
        ],
        'getSwagger'     => [
            '/swagger',
            'GET',
            'string',
        ],
        'getSwaggerJson' => [
            '/swagger.json',
            'GET',
            'string',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets the OpenAPI 3 specifications
     * No authentication required.
     */
    public function getOpenapi(): string
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets OpenAPI 3 specifications
     * No authentication required.
     */
    public function getOpenapiJson(): string
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the swagger specifications
     * No authentication required.
     */
    public function getSwagger(): string
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the swagger specifications
     * No authentication required.
     */
    public function getSwaggerJson(): string
    {
        return $this->makeApiCall(__FUNCTION__);
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ConfigurationService extends ApiService
{
    protected static array $endpoints        = [
        'getSystemConfiguration'       => [
            '/System/Configuration',
            'GET',
            '\\EmbyClient\\Model\\Configuration\\ServerConfiguration',
            false,
        ],
        'postSystemConfiguration'      => [
            '/System/Configuration',
            'POST',
            'void',
            false,
        ],
        'getSystemConfigurationByKey'  => [
            '/System/Configuration/{Key}',
            'GET',
            'mixed',
            false,
        ],
        'postSystemConfigurationByKey' => [
            '/System/Configuration/{Key}',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getSystemConfiguration'       => [],
        'postSystemConfiguration'      => [],
        'getSystemConfigurationByKey'  => [
            'key',
        ],
        'postSystemConfigurationByKey' => [
            'key',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/System/Configuration/{Key}' => [
            'key' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets application configuration
     * Requires authentication as user.
     */
    public function getSystemConfiguration(): \EmbyClient\Model\Configuration\ServerConfiguration
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Updates application configuration
     * Requires authentication as administrator.
     */
    public function postSystemConfiguration(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a named configuration
     * Requires authentication as user.
     */
    public function getSystemConfigurationByKey(string $key): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $key);
    }

    /**
     * Updates named configuration
     * Requires authentication as administrator.
     */
    public function postSystemConfigurationByKey(string $key): void
    {
        $this->makeApiCall(__FUNCTION__, $key);
    }
}

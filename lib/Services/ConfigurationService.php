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
        ],
        'postSystemConfiguration'      => [
            '/System/Configuration',
            'POST',
            'void',
        ],
        'getSystemConfigurationByKey'  => [
            '/System/Configuration/{Key}',
            'GET',
            'mixed',
        ],
        'postSystemConfigurationByKey' => [
            '/System/Configuration/{Key}',
            'POST',
            'void',
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

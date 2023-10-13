<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class PluginService extends ApiService
{
    protected static array $endpoints        = [
        'getPlugins'                   => [
            '/Plugins',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Plugins\\PluginInfo',
        ],
        'deletePluginsById'            => [
            '/Plugins/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'getPluginsByIdThumb'          => [
            '/Plugins/{Id}/Thumb',
            'GET',
            'mixed',
            false,
        ],
        'getPluginsByIdConfiguration'  => [
            '/Plugins/{Id}/Configuration',
            'GET',
            'mixed',
            false,
        ],
        'postPluginsByIdConfiguration' => [
            '/Plugins/{Id}/Configuration',
            'POST',
            'void',
            false,
        ],
        'postPluginsByIdDelete'        => [
            '/Plugins/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getPlugins'                   => [],
        'deletePluginsById'            => [
            'id',
        ],
        'getPluginsByIdThumb'          => [
            'id',
        ],
        'getPluginsByIdConfiguration'  => [
            'id',
        ],
        'postPluginsByIdConfiguration' => [
            'id',
        ],
        'postPluginsByIdDelete'        => [
            'id',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/Plugins/{Id}'               => [
            'id' => true,
        ],
        '/Plugins/{Id}/Thumb'         => [
            'id' => true,
        ],
        '/Plugins/{Id}/Configuration' => [
            'id' => true,
        ],
        '/Plugins/{Id}/Delete'        => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a list of currently installed plugins
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Plugins\PluginInfo[]
     */
    public function getPlugins(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Uninstalls a plugin
     * Requires authentication as administrator.
     */
    public function deletePluginsById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a plugin thumb image
     * No authentication required.
     */
    public function getPluginsByIdThumb(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a plugin's configuration
     * Requires authentication as user.
     */
    public function getPluginsByIdConfiguration(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a plugin's configuration
     * Requires authentication as user.
     */
    public function postPluginsByIdConfiguration(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Uninstalls a plugin
     * Requires authentication as administrator.
     */
    public function postPluginsByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}

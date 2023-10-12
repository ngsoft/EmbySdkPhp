<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class EnvironmentService extends ApiService
{
    protected static array $endpoints        = [
        'postEnvironmentValidatepath'           => [
            '/Environment/ValidatePath',
            'POST',
            'mixed',
        ],
        'getEnvironmentDefaultdirectorybrowser' => [
            '/Environment/DefaultDirectoryBrowser',
            'GET',
            '\\EmbyClient\\Model\\DefaultDirectoryBrowserInfo',
        ],
        'getEnvironmentDirectorycontents'       => [
            '/Environment/DirectoryContents',
            'GET',
            'array',
        ],
        'getEnvironmentNetworkshares'           => [
            '/Environment/NetworkShares',
            'GET',
            'array',
        ],
        'getEnvironmentDrives'                  => [
            '/Environment/Drives',
            'GET',
            'array',
        ],
        'getEnvironmentNetworkdevices'          => [
            '/Environment/NetworkDevices',
            'GET',
            'array',
        ],
        'getEnvironmentParentpath'              => [
            '/Environment/ParentPath',
            'GET',
            'string',
        ],
    ];
    protected static array $queryParameters  = [
        '/Environment/ValidatePath'      => [
            'path' => true,
        ],
        '/Environment/DirectoryContents' => [
            'path'               => true,
            'includeFiles'       => true,
            'includeDirectories' => true,
        ],
        '/Environment/NetworkShares'     => [
            'path' => true,
        ],
        '/Environment/ParentPath'        => [
            'path' => true,
        ],
    ];
    protected static array $pathParameters   = [];
    protected static array $headerParameters = [];

    /**
     * Gets the contents of a given directory in the file system
     * Requires authentication as administrator.
     */
    public function postEnvironmentValidatepath(string $path): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $path);
    }

    /**
     * Gets the parent path of a given path
     * Requires authentication as administrator.
     */
    public function getEnvironmentDefaultdirectorybrowser(): \EmbyClient\Model\DefaultDirectoryBrowserInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the contents of a given directory in the file system
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public function getEnvironmentDirectorycontents(
        string $path,
        bool $includeFiles,
        bool $includeDirectories
    ): array {
        return $this->makeApiCall(__FUNCTION__, $path, $includeFiles, $includeDirectories);
    }

    /**
     * Gets shares from a network device
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public function getEnvironmentNetworkshares(string $path): array
    {
        return $this->makeApiCall(__FUNCTION__, $path);
    }

    /**
     * Gets available drives from the server's file system
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public function getEnvironmentDrives(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a list of devices on the network
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public function getEnvironmentNetworkdevices(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the parent path of a given path
     * Requires authentication as administrator.
     */
    public function getEnvironmentParentpath(string $path): string
    {
        return $this->makeApiCall(__FUNCTION__, $path);
    }
}

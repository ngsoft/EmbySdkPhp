<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class SystemService extends ApiService
{
    protected static array $endpoints        = [
        'getSystemReleasenotes'         => [
            '/System/ReleaseNotes',
            'GET',
            '\\EmbyClient\\Model\\Updates\\PackageVersionInfo',
            false,
        ],
        'getSystemPing'                 => [
            '/System/Ping',
            'GET',
            'void',
            false,
        ],
        'postSystemPing'                => [
            '/System/Ping',
            'POST',
            'void',
            false,
        ],
        'getSystemWakeonlaninfo'        => [
            '/System/WakeOnLanInfo',
            'GET',
            'array',
            '\\EmbyClient\\Model\\WakeOnLanInfo',
        ],
        'getSystemInfo'                 => [
            '/System/Info',
            'GET',
            '\\EmbyClient\\Model\\SystemInfo',
            false,
        ],
        'postSystemRestart'             => [
            '/System/Restart',
            'POST',
            'mixed',
            false,
        ],
        'postSystemShutdown'            => [
            '/System/Shutdown',
            'POST',
            'mixed',
            false,
        ],
        'getSystemEndpoint'             => [
            '/System/Endpoint',
            'GET',
            '\\EmbyClient\\Model\\Net\\EndPointInfo',
            false,
        ],
        'getSystemReleasenotesVersions' => [
            '/System/ReleaseNotes/Versions',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Updates\\PackageVersionInfo',
        ],
        'getSystemLogsQuery'            => [
            '/System/Logs/Query',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\LogFile',
            false,
        ],
        'getSystemLogsByName'           => [
            '/System/Logs/{Name}',
            'GET',
            'mixed',
            false,
        ],
        'getSystemInfoPublic'           => [
            '/System/Info/Public',
            'GET',
            '\\EmbyClient\\Model\\PublicSystemInfo',
            false,
        ],
        'getSystemLogsByNameLines'      => [
            '/System/Logs/{Name}/Lines',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Strings',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getSystemReleasenotes'         => [],
        'getSystemPing'                 => [],
        'postSystemPing'                => [],
        'getSystemWakeonlaninfo'        => [],
        'getSystemInfo'                 => [],
        'postSystemRestart'             => [],
        'postSystemShutdown'            => [],
        'getSystemEndpoint'             => [],
        'getSystemReleasenotesVersions' => [],
        'getSystemLogsQuery'            => [
            'startIndex',
            'limit',
        ],
        'getSystemLogsByName'           => [
            'name',
            'sanitize',
        ],
        'getSystemInfoPublic'           => [],
        'getSystemLogsByNameLines'      => [
            'name',
        ],
    ];
    protected static array $queryParameters  = [
        '/System/Logs/Query'  => [
            'startIndex' => true,
            'limit'      => true,
        ],
        '/System/Logs/{Name}' => [
            'sanitize' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/System/Logs/{Name}'       => [
            'name' => true,
        ],
        '/System/Logs/{Name}/Lines' => [
            'name' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets release notes
     * Requires authentication as user.
     */
    public function getSystemReleasenotes(): \EmbyClient\Model\Updates\PackageVersionInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    public function getSystemPing(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    public function postSystemPing(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets wake on lan information
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\WakeOnLanInfo[]
     */
    public function getSystemWakeonlaninfo(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets information about the server
     * Requires authentication as user.
     */
    public function getSystemInfo(): \EmbyClient\Model\SystemInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Restarts the application, if needed
     * Requires authentication as administrator.
     */
    public function postSystemRestart(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Shuts down the application
     * Requires authentication as administrator.
     */
    public function postSystemShutdown(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets information about the request endpoint
     * Requires authentication as user.
     */
    public function getSystemEndpoint(): \EmbyClient\Model\Net\EndPointInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets release notes
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Updates\PackageVersionInfo[]
     */
    public function getSystemReleasenotesVersions(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a list of available server log files
     * Requires authentication as administrator.
     */
    public function getSystemLogsQuery(
        int $startIndex,
        null|int $limit = null
    ): \EmbyClient\Model\QueryResult\LogFile {
        return $this->makeApiCall(__FUNCTION__, $startIndex, $limit);
    }

    /**
     * Gets a log file
     * Requires authentication as administrator.
     */
    public function getSystemLogsByName(
        string $name,
        bool $sanitize
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $name, $sanitize);
    }

    /**
     * Gets public information about the server
     * No authentication required.
     */
    public function getSystemInfoPublic(): \EmbyClient\Model\PublicSystemInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a log file
     * Requires authentication as administrator.
     */
    public function getSystemLogsByNameLines(string $name): \EmbyClient\Model\QueryResult\Strings
    {
        return $this->makeApiCall(__FUNCTION__, $name);
    }
}

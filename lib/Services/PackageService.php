<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class PackageService extends ApiService
{
    protected static array $endpoints        = [
        'getPackages'                      => [
            '/Packages',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Updates\\PackageInfo',
        ],
        'getPackagesUpdates'               => [
            '/Packages/Updates',
            'GET',
            'array',
            '\\EmbyClient\\Model\\Updates\\PackageVersionInfo',
        ],
        'getPackagesByName'                => [
            '/Packages/{Name}',
            'GET',
            '\\EmbyClient\\Model\\Updates\\PackageInfo',
            false,
        ],
        'postPackagesInstalledByName'      => [
            '/Packages/Installed/{Name}',
            'POST',
            'void',
            false,
        ],
        'deletePackagesInstallingById'     => [
            '/Packages/Installing/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'postPackagesInstallingByIdDelete' => [
            '/Packages/Installing/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Packages'                  => [
            'packageType'   => true,
            'targetSystems' => true,
            'isPremium'     => true,
            'isAdult'       => true,
        ],
        '/Packages/Updates'          => [
            'packageType' => true,
        ],
        '/Packages/{Name}'           => [
            'assemblyGuid' => true,
        ],
        '/Packages/Installed/{Name}' => [
            'assemblyGuid' => true,
            'version'      => true,
            'updateClass'  => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Packages/{Name}'                 => [
            'name' => true,
        ],
        '/Packages/Installed/{Name}'       => [
            'name' => true,
        ],
        '/Packages/Installing/{Id}'        => [
            'id' => true,
        ],
        '/Packages/Installing/{Id}/Delete' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets available packages
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Updates\PackageInfo[]
     */
    public function getPackages(
        string $packageType,
        string $targetSystems,
        null|bool $isAdult = null,
        null|bool $isPremium = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $packageType, $targetSystems, $isAdult, $isPremium);
    }

    /**
     * Gets available package updates for currently installed packages
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Updates\PackageVersionInfo[]
     */
    public function getPackagesUpdates(string $packageType): array
    {
        return $this->makeApiCall(__FUNCTION__, $packageType);
    }

    /**
     * Gets a package, by name or assembly guid
     * Requires authentication as user.
     */
    public function getPackagesByName(
        string $name,
        string $assemblyGuid
    ): \EmbyClient\Model\Updates\PackageInfo {
        return $this->makeApiCall(__FUNCTION__, $name, $assemblyGuid);
    }

    /**
     * Installs a package
     * Requires authentication as administrator.
     */
    public function postPackagesInstalledByName(
        string $name,
        string $assemblyGuid,
        string $version,
        \EmbyClient\Model\Updates\PackageVersionClass $updateClass
    ): void {
        $this->makeApiCall(__FUNCTION__, $name, $assemblyGuid, $version, $updateClass);
    }

    /**
     * Cancels a package installation
     * Requires authentication as administrator.
     */
    public function deletePackagesInstallingById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a package installation
     * Requires authentication as administrator.
     */
    public function postPackagesInstallingByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}

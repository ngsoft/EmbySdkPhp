<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class RemoteImageService extends ApiService
{
    protected static array $endpoints        = [
        'getImagesRemote'                   => [
            '/Images/Remote',
            'GET',
            'mixed',
            false,
        ],
        'getItemsByIdRemoteimages'          => [
            '/Items/{Id}/RemoteImages',
            'GET',
            '\\EmbyClient\\Model\\RemoteImageResult',
            false,
        ],
        'getItemsByIdRemoteimagesProviders' => [
            '/Items/{Id}/RemoteImages/Providers',
            'GET',
            'array',
            '\\EmbyClient\\Model\\ImageProviderInfo',
        ],
        'postItemsByIdRemoteimagesDownload' => [
            '/Items/{Id}/RemoteImages/Download',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getImagesRemote'                   => [
            'imageUrl',
        ],
        'getItemsByIdRemoteimages'          => [
            'id',
            'type',
            'providerName',
            'includeAllLanguages',
            'limit',
            'startIndex',
        ],
        'getItemsByIdRemoteimagesProviders' => [
            'id',
        ],
        'postItemsByIdRemoteimagesDownload' => [
            'id',
            'type',
            'providerName',
            'imageUrl',
        ],
    ];
    protected static array $queryParameters  = [
        '/Images/Remote'                    => [
            'imageUrl' => true,
        ],
        '/Items/{Id}/RemoteImages'          => [
            'type'                => true,
            'startIndex'          => true,
            'limit'               => true,
            'providerName'        => true,
            'includeAllLanguages' => true,
        ],
        '/Items/{Id}/RemoteImages/Download' => [
            'type'         => true,
            'providerName' => true,
            'imageUrl'     => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/RemoteImages'           => [
            'id' => true,
        ],
        '/Items/{Id}/RemoteImages/Providers' => [
            'id' => true,
        ],
        '/Items/{Id}/RemoteImages/Download'  => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a remote image
     * Requires authentication as administrator.
     */
    public function getImagesRemote(string $imageUrl): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $imageUrl);
    }

    /**
     * Gets available remote images for an item
     * Requires authentication as user.
     */
    public function getItemsByIdRemoteimages(
        string $id,
        \EmbyClient\Model\ImageType $type,
        string $providerName,
        bool $includeAllLanguages,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\RemoteImageResult {
        return $this->makeApiCall(__FUNCTION__, $id, $type, $providerName, $includeAllLanguages, $limit, $startIndex);
    }

    /**
     * Gets available remote image providers for an item
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageProviderInfo[]
     */
    public function getItemsByIdRemoteimagesProviders(string $id): array
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Downloads a remote image for an item
     * Requires authentication as administrator.
     */
    public function postItemsByIdRemoteimagesDownload(
        string $id,
        \EmbyClient\Model\ImageType $type,
        string $providerName,
        string $imageUrl
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $type, $providerName, $imageUrl);
    }
}

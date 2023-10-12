<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ItemRefreshService extends ApiService
{
    protected static array $endpoints        = [
        'postItemsByIdRefresh' => [
            '/Items/{Id}/Refresh',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/{Id}/Refresh' => [
            'recursive'           => true,
            'metadataRefreshMode' => true,
            'imageRefreshMode'    => true,
            'replaceAllMetadata'  => true,
            'replaceAllImages'    => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/Refresh' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Refreshes metadata for an item
     * Requires authentication as user.
     */
    public function postItemsByIdRefresh(
        bool $recursive,
        string $id,
        \EmbyClient\Model\Providers\MetadataRefreshMode $metadataRefreshMode,
        \EmbyClient\Model\Providers\MetadataRefreshMode $imageRefreshMode,
        bool $replaceAllMetadata,
        bool $replaceAllImages
    ): void {
        $this->makeApiCall(__FUNCTION__, $recursive, $id, $metadataRefreshMode, $imageRefreshMode, $replaceAllMetadata, $replaceAllImages);
    }
}

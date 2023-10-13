<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class BifService extends ApiService
{
    protected static array $endpoints        = [
        'getItemsByIdThumbnailset' => [
            '/Items/{Id}/ThumbnailSet',
            'GET',
            '\\EmbyClient\\Model\\RokuMetadata\\Api\\ThumbnailSetInfo',
            false,
        ],
        'getVideosByIdIndexBif'    => [
            '/Videos/{Id}/index.bif',
            'GET',
            'mixed',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getItemsByIdThumbnailset' => [
            'width',
            'id',
        ],
        'getVideosByIdIndexBif'    => [
            'width',
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/{Id}/ThumbnailSet' => [
            'width' => true,
        ],
        '/Videos/{Id}/index.bif'   => [
            'width' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Items/{Id}/ThumbnailSet' => [
            'id' => true,
        ],
        '/Videos/{Id}/index.bif'   => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    public function getItemsByIdThumbnailset(
        int $width,
        string $id
    ): \EmbyClient\Model\RokuMetadata\Api\ThumbnailSetInfo {
        return $this->makeApiCall(__FUNCTION__, $width, $id);
    }

    public function getVideosByIdIndexBif(
        int $width,
        string $id
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $width, $id);
    }
}

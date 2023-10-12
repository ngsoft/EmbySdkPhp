<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class VideosService extends ApiService
{
    protected static array $endpoints        = [
        'postVideosMergeversions'              => [
            '/Videos/MergeVersions',
            'POST',
            'void',
        ],
        'deleteVideosByIdAlternatesources'     => [
            '/Videos/{Id}/AlternateSources',
            'DELETE',
            'void',
        ],
        'postVideosByIdAlternatesourcesDelete' => [
            '/Videos/{Id}/AlternateSources/Delete',
            'POST',
            'void',
        ],
    ];
    protected static array $queryParameters  = [
        '/Videos/MergeVersions' => [
            'ids' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Videos/{Id}/AlternateSources'        => [
            'id' => true,
        ],
        '/Videos/{Id}/AlternateSources/Delete' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Merges videos into a single record
     * Requires authentication as administrator.
     */
    public function postVideosMergeversions(string $ids): void
    {
        $this->makeApiCall(__FUNCTION__, $ids);
    }

    /**
     * Removes alternate video sources.
     * Requires authentication as administrator.
     */
    public function deleteVideosByIdAlternatesources(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Removes alternate video sources.
     * Requires authentication as administrator.
     */
    public function postVideosByIdAlternatesourcesDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }
}

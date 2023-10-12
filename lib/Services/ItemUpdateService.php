<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class ItemUpdateService extends ApiService
{
    protected static array $endpoints        = [
        'postItemsByItemid'              => [
            '/Items/{ItemId}',
            'POST',
            'void',
        ],
        'getItemsByItemidMetadataeditor' => [
            '/Items/{ItemId}/MetadataEditor',
            'GET',
            '\\EmbyClient\\Model\\MetadataEditorInfo',
        ],
    ];
    protected static array $queryParameters  = [];
    protected static array $pathParameters   = [
        '/Items/{ItemId}'                => [
            'itemId' => true,
        ],
        '/Items/{ItemId}/MetadataEditor' => [
            'itemId' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Updates an item
     * Requires authentication as administrator.
     */
    public function postItemsByItemid(string $itemId): void
    {
        $this->makeApiCall(__FUNCTION__, $itemId);
    }

    /**
     * Gets metadata editor info for an item
     * Requires authentication as administrator.
     */
    public function getItemsByItemidMetadataeditor(string $itemId): \EmbyClient\Model\MetadataEditorInfo
    {
        return $this->makeApiCall(__FUNCTION__, $itemId);
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class CollectionService extends ApiService
{
    protected static array $endpoints        = [
        'postCollections'                => [
            '/Collections',
            'POST',
            '\\EmbyClient\\Model\\Collections\\CollectionCreationResult',
            false,
        ],
        'postCollectionsByIdItems'       => [
            '/Collections/{Id}/Items',
            'POST',
            'void',
            false,
        ],
        'deleteCollectionsByIdItems'     => [
            '/Collections/{Id}/Items',
            'DELETE',
            'void',
            false,
        ],
        'postCollectionsByIdItemsDelete' => [
            '/Collections/{Id}/Items/Delete',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Collections'                   => [
            'isLocked' => true,
            'name'     => true,
            'parentId' => true,
            'ids'      => true,
        ],
        '/Collections/{Id}/Items'        => [
            'ids' => true,
        ],
        '/Collections/{Id}/Items/Delete' => [
            'ids' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Collections/{Id}/Items'        => [
            'id' => true,
        ],
        '/Collections/{Id}/Items/Delete' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Creates a new collection
     * Requires authentication as user.
     */
    public function postCollections(
        bool $isLocked,
        string $name,
        string $parentId,
        string $ids
    ): \EmbyClient\Model\Collections\CollectionCreationResult {
        return $this->makeApiCall(__FUNCTION__, $isLocked, $name, $parentId, $ids);
    }

    /**
     * Adds items to a collection
     * Requires authentication as user.
     */
    public function postCollectionsByIdItems(
        string $ids,
        string $id
    ): void {
        $this->makeApiCall(__FUNCTION__, $ids, $id);
    }

    /**
     * Removes items from a collection
     * Requires authentication as user.
     */
    public function deleteCollectionsByIdItems(
        string $ids,
        string $id
    ): void {
        $this->makeApiCall(__FUNCTION__, $ids, $id);
    }

    /**
     * Removes items from a collection
     * Requires authentication as user.
     */
    public function postCollectionsByIdItemsDelete(
        string $ids,
        string $id
    ): void {
        $this->makeApiCall(__FUNCTION__, $ids, $id);
    }
}

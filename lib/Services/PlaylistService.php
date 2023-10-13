<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class PlaylistService extends ApiService
{
    protected static array $endpoints        = [
        'postPlaylists'                                => [
            '/Playlists',
            'POST',
            '\\EmbyClient\\Model\\Playlists\\PlaylistCreationResult',
            false,
        ],
        'getPlaylistsByIdItems'                        => [
            '/Playlists/{Id}/Items',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'postPlaylistsByIdItems'                       => [
            '/Playlists/{Id}/Items',
            'POST',
            'void',
            false,
        ],
        'deletePlaylistsByIdItems'                     => [
            '/Playlists/{Id}/Items',
            'DELETE',
            'void',
            false,
        ],
        'postPlaylistsByIdItemsDelete'                 => [
            '/Playlists/{Id}/Items/Delete',
            'POST',
            'void',
            false,
        ],
        'postPlaylistsByIdItemsByItemidMoveByNewindex' => [
            '/Playlists/{Id}/Items/{ItemId}/Move/{NewIndex}',
            'POST',
            'void',
            false,
        ],
    ];
    protected static array $parameters       = [
        'postPlaylists'                                => [
            'name',
            'ids',
            'mediaType',
        ],
        'getPlaylistsByIdItems'                        => [
            'id',
            'userId',
            'fields',
            'enableImageTypes',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
            'limit',
            'startIndex',
        ],
        'postPlaylistsByIdItems'                       => [
            'userId',
            'ids',
            'id',
        ],
        'deletePlaylistsByIdItems'                     => [
            'id',
            'entryIds',
        ],
        'postPlaylistsByIdItemsDelete'                 => [
            'id',
            'entryIds',
        ],
        'postPlaylistsByIdItemsByItemidMoveByNewindex' => [
            'itemId',
            'id',
            'newIndex',
        ],
    ];
    protected static array $queryParameters  = [
        '/Playlists'                   => [
            'name'      => true,
            'ids'       => true,
            'mediaType' => true,
        ],
        '/Playlists/{Id}/Items'        => [
            'userId'           => true,
            'startIndex'       => true,
            'limit'            => true,
            'fields'           => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'ids'              => true,
            'entryIds'         => true,
        ],
        '/Playlists/{Id}/Items/Delete' => [
            'entryIds' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Playlists/{Id}/Items'                          => [
            'id' => true,
        ],
        '/Playlists/{Id}/Items/Delete'                   => [
            'id' => true,
        ],
        '/Playlists/{Id}/Items/{ItemId}/Move/{NewIndex}' => [
            'itemId'   => true,
            'id'       => true,
            'newIndex' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Creates a new playlist
     * Requires authentication as user.
     */
    public function postPlaylists(
        string $name,
        string $ids,
        string $mediaType
    ): \EmbyClient\Model\Playlists\PlaylistCreationResult {
        return $this->makeApiCall(__FUNCTION__, $name, $ids, $mediaType);
    }

    /**
     * Gets the original items of a playlist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getPlaylistsByIdItems(
        string $id,
        string $userId,
        string $fields,
        string $enableImageTypes,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $userId, $fields, $enableImageTypes, $imageTypeLimit, $enableUserData, $enableImages, $limit, $startIndex);
    }

    /**
     * Adds items to a playlist
     * Requires authentication as user.
     */
    public function postPlaylistsByIdItems(
        string $userId,
        string $ids,
        string $id
    ): void {
        $this->makeApiCall(__FUNCTION__, $userId, $ids, $id);
    }

    /**
     * Removes items from a playlist
     * Requires authentication as user.
     */
    public function deletePlaylistsByIdItems(
        string $id,
        string $entryIds
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $entryIds);
    }

    /**
     * Removes items from a playlist
     * Requires authentication as user.
     */
    public function postPlaylistsByIdItemsDelete(
        string $id,
        string $entryIds
    ): void {
        $this->makeApiCall(__FUNCTION__, $id, $entryIds);
    }

    /**
     * Moves a playlist item
     * Requires authentication as user.
     */
    public function postPlaylistsByIdItemsByItemidMoveByNewindex(
        int $itemId,
        string $id,
        int $newIndex
    ): void {
        $this->makeApiCall(__FUNCTION__, $itemId, $id, $newIndex);
    }
}

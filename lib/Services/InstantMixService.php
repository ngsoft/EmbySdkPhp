<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class InstantMixService extends ApiService
{
    protected static array $endpoints        = [
        'getArtistsInstantmix'           => [
            '/Artists/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getAudiobooksNextup'            => [
            '/AudioBooks/NextUp',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getMusicgenresInstantmix'       => [
            '/MusicGenres/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getAlbumsByIdInstantmix'        => [
            '/Albums/{Id}/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getItemsByIdInstantmix'         => [
            '/Items/{Id}/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getMusicgenresByNameInstantmix' => [
            '/MusicGenres/{Name}/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getPlaylistsByIdInstantmix'     => [
            '/Playlists/{Id}/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getSongsByIdInstantmix'         => [
            '/Songs/{Id}/InstantMix',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getArtistsInstantmix'           => [
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getAudiobooksNextup'            => [
            'userId',
            'fields',
            'albumId',
            'parentId',
            'enableImageTypes',
            'enableUserData',
            'imageTypeLimit',
            'enableImages',
            'limit',
            'startIndex',
        ],
        'getMusicgenresInstantmix'       => [
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getAlbumsByIdInstantmix'        => [
            'id',
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getItemsByIdInstantmix'         => [
            'id',
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getMusicgenresByNameInstantmix' => [
            'name',
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getPlaylistsByIdInstantmix'     => [
            'id',
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
        'getSongsByIdInstantmix'         => [
            'id',
            'includeItemTypes',
            'enableImageTypes',
            'userId',
            'fields',
            'limit',
            'imageTypeLimit',
            'enableUserData',
            'enableImages',
        ],
    ];
    protected static array $queryParameters  = [
        '/Artists/InstantMix'            => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/AudioBooks/NextUp'             => [
            'userId'           => true,
            'startIndex'       => true,
            'limit'            => true,
            'fields'           => true,
            'albumId'          => true,
            'parentId'         => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
        ],
        '/MusicGenres/InstantMix'        => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Albums/{Id}/InstantMix'        => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Items/{Id}/InstantMix'         => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/MusicGenres/{Name}/InstantMix' => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Playlists/{Id}/InstantMix'     => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Songs/{Id}/InstantMix'         => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Albums/{Id}/InstantMix'        => [
            'id' => true,
        ],
        '/Items/{Id}/InstantMix'         => [
            'id' => true,
        ],
        '/MusicGenres/{Name}/InstantMix' => [
            'name' => true,
        ],
        '/Playlists/{Id}/InstantMix'     => [
            'id' => true,
        ],
        '/Songs/{Id}/InstantMix'         => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Creates an instant playlist based on a given artist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getArtistsInstantmix(
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Gets a list of next up episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getAudiobooksNextup(
        string $userId,
        string $fields,
        string $albumId,
        string $parentId,
        string $enableImageTypes,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $fields, $albumId, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Creates an instant playlist based on a music genre
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getMusicgenresInstantmix(
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given album
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getAlbumsByIdInstantmix(
        string $id,
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getItemsByIdInstantmix(
        string $id,
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a music genre
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getMusicgenresByNameInstantmix(
        string $name,
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $name, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given playlist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getPlaylistsByIdInstantmix(
        string $id,
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given song
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getSongsByIdInstantmix(
        string $id,
        string $includeItemTypes,
        string $enableImageTypes,
        string $userId,
        string $fields,
        null|int $limit = null,
        null|int $imageTypeLimit = null,
        null|bool $enableUserData = null,
        null|bool $enableImages = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class UserLibraryService extends ApiService
{
    protected static array $endpoints        = [
        'getLivetvProgramsById'                    => [
            '/LiveTv/Programs/{Id}',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'getVideosByIdAdditionalparts'             => [
            '/Videos/{Id}/AdditionalParts',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getUsersByUseridItemsLatest'              => [
            '/Users/{UserId}/Items/Latest',
            'GET',
            'array',
            '\\EmbyClient\\Model\\BaseItemDto',
        ],
        'getUsersByUseridItemsById'                => [
            '/Users/{UserId}/Items/{Id}',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'getUsersByUseridItemsRoot'                => [
            '/Users/{UserId}/Items/Root',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'postUsersByUseridFavoriteitemsById'       => [
            '/Users/{UserId}/FavoriteItems/{Id}',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'deleteUsersByUseridFavoriteitemsById'     => [
            '/Users/{UserId}/FavoriteItems/{Id}',
            'DELETE',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'getUsersByUseridItemsByIdSpecialfeatures' => [
            '/Users/{UserId}/Items/{Id}/SpecialFeatures',
            'GET',
            'array',
            '\\EmbyClient\\Model\\BaseItemDto',
        ],
        'getUsersByUseridItemsByIdLocaltrailers'   => [
            '/Users/{UserId}/Items/{Id}/LocalTrailers',
            'GET',
            'array',
            '\\EmbyClient\\Model\\BaseItemDto',
        ],
        'getUsersByUseridItemsByIdIntros'          => [
            '/Users/{UserId}/Items/{Id}/Intros',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'postUsersByUseridFavoriteitemsByIdDelete' => [
            '/Users/{UserId}/FavoriteItems/{Id}/Delete',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'postUsersByUseridItemsByIdRating'         => [
            '/Users/{UserId}/Items/{Id}/Rating',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'deleteUsersByUseridItemsByIdRating'       => [
            '/Users/{UserId}/Items/{Id}/Rating',
            'DELETE',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'postUsersByUseridItemsByIdHidefromresume' => [
            '/Users/{UserId}/Items/{Id}/HideFromResume',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
        'postUsersByUseridItemsByIdRatingDelete'   => [
            '/Users/{UserId}/Items/{Id}/Rating/Delete',
            'POST',
            '\\EmbyClient\\Model\\UserItemDataDto',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getLivetvProgramsById'                    => [
            'id',
        ],
        'getVideosByIdAdditionalparts'             => [
            'userId',
            'id',
        ],
        'getUsersByUseridItemsLatest'              => [
            'userId',
            'limit',
            'parentId',
            'fields',
            'includeItemTypes',
            'mediaTypes',
            'groupItems',
            'enableImageTypes',
            'enableUserData',
            'imageTypeLimit',
            'enableImages',
            'isPlayed',
            'isFolder',
        ],
        'getUsersByUseridItemsById'                => [
            'userId',
            'id',
        ],
        'getUsersByUseridItemsRoot'                => [
            'userId',
        ],
        'postUsersByUseridFavoriteitemsById'       => [
            'userId',
            'id',
        ],
        'deleteUsersByUseridFavoriteitemsById'     => [
            'userId',
            'id',
        ],
        'getUsersByUseridItemsByIdSpecialfeatures' => [
            'userId',
            'id',
        ],
        'getUsersByUseridItemsByIdLocaltrailers'   => [
            'userId',
            'id',
        ],
        'getUsersByUseridItemsByIdIntros'          => [
            'userId',
            'id',
        ],
        'postUsersByUseridFavoriteitemsByIdDelete' => [
            'userId',
            'id',
        ],
        'postUsersByUseridItemsByIdRating'         => [
            'userId',
            'id',
            'likes',
        ],
        'deleteUsersByUseridItemsByIdRating'       => [
            'userId',
            'id',
        ],
        'postUsersByUseridItemsByIdHidefromresume' => [
            'userId',
            'id',
            'hide',
        ],
        'postUsersByUseridItemsByIdRatingDelete'   => [
            'userId',
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/Videos/{Id}/AdditionalParts'              => [
            'userId' => true,
        ],
        '/Users/{UserId}/Items/Latest'              => [
            'limit'            => true,
            'parentId'         => true,
            'fields'           => true,
            'includeItemTypes' => true,
            'mediaTypes'       => true,
            'isFolder'         => true,
            'isPlayed'         => true,
            'groupItems'       => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
        ],
        '/Users/{UserId}/Items/{Id}/Rating'         => [
            'likes' => true,
        ],
        '/Users/{UserId}/Items/{Id}/HideFromResume' => [
            'hide' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/LiveTv/Programs/{Id}'                      => [
            'id' => true,
        ],
        '/Videos/{Id}/AdditionalParts'               => [
            'id' => true,
        ],
        '/Users/{UserId}/Items/Latest'               => [
            'userId' => true,
        ],
        '/Users/{UserId}/Items/{Id}'                 => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/Root'                 => [
            'userId' => true,
        ],
        '/Users/{UserId}/FavoriteItems/{Id}'         => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/SpecialFeatures' => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/LocalTrailers'   => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/Intros'          => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/FavoriteItems/{Id}/Delete'  => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/Rating'          => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/HideFromResume'  => [
            'userId' => true,
            'id'     => true,
        ],
        '/Users/{UserId}/Items/{Id}/Rating/Delete'   => [
            'userId' => true,
            'id'     => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a live tv program
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvProgramsById(string $id): \EmbyClient\Model\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets additional parts for a video.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getVideosByIdAdditionalparts(
        string $userId,
        string $id
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets latest media
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Latest-Items API Documentation: Latest Items
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getUsersByUseridItemsLatest(
        string $userId,
        int $limit,
        string $parentId,
        string $fields,
        string $includeItemTypes,
        string $mediaTypes,
        bool $groupItems,
        string $enableImageTypes,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|bool $isPlayed = null,
        null|bool $isFolder = null
    ): array {
        return $this->makeApiCall(__FUNCTION__, $userId, $limit, $parentId, $fields, $includeItemTypes, $mediaTypes, $groupItems, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $isPlayed, $isFolder);
    }

    /**
     * Gets an item from a user's library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getUsersByUseridItemsById(
        string $userId,
        string $id
    ): \EmbyClient\Model\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets the root folder from a user's library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getUsersByUseridItemsRoot(string $userId): \EmbyClient\Model\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }

    /**
     * Marks an item as a favorite
     * Requires authentication as user.
     */
    public function postUsersByUseridFavoriteitemsById(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Unmarks an item as a favorite
     * Requires authentication as user.
     */
    public function deleteUsersByUseridFavoriteitemsById(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets special features for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getUsersByUseridItemsByIdSpecialfeatures(
        string $userId,
        string $id
    ): array {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets local trailers for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getUsersByUseridItemsByIdLocaltrailers(
        string $userId,
        string $id
    ): array {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets intros to play before the main media item plays
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getUsersByUseridItemsByIdIntros(
        string $userId,
        string $id
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Unmarks an item as a favorite
     * Requires authentication as user.
     */
    public function postUsersByUseridFavoriteitemsByIdDelete(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Updates a user's rating for an item
     * Requires authentication as user.
     */
    public function postUsersByUseridItemsByIdRating(
        string $userId,
        string $id,
        bool $likes
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id, $likes);
    }

    /**
     * Deletes a user's saved personal rating for an item
     * Requires authentication as user.
     */
    public function deleteUsersByUseridItemsByIdRating(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Updates a user's hide from resume for an item
     * Requires authentication as user.
     */
    public function postUsersByUseridItemsByIdHidefromresume(
        string $userId,
        string $id,
        bool $hide
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id, $hide);
    }

    /**
     * Deletes a user's saved personal rating for an item
     * Requires authentication as user.
     */
    public function postUsersByUseridItemsByIdRatingDelete(
        string $userId,
        string $id
    ): \EmbyClient\Model\UserItemDataDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }
}

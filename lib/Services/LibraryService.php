<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class LibraryService extends ApiService
{
    protected static array $endpoints        = [
        'getItemsCounts'                   => [
            '/Items/Counts',
            'GET',
            '\\EmbyClient\\Model\\ItemCounts',
        ],
        'getItemsIntros'                   => [
            '/Items/Intros',
            'GET',
            'array',
        ],
        'postItemsDelete'                  => [
            '/Items/Delete',
            'POST',
            'void',
        ],
        'deleteItemsById'                  => [
            '/Items/{Id}',
            'DELETE',
            'void',
        ],
        'getLibrariesAvailableoptions'     => [
            '/Libraries/AvailableOptions',
            'GET',
            '\\EmbyClient\\Model\\Library\\LibraryOptionsResult',
        ],
        'getLibrarySelectablemediafolders' => [
            '/Library/SelectableMediaFolders',
            'GET',
            'array',
        ],
        'getLibraryMediafolders'           => [
            '/Library/MediaFolders',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getLibraryPhysicalpaths'          => [
            '/Library/PhysicalPaths',
            'GET',
            'array',
        ],
        'postLibraryRefresh'               => [
            '/Library/Refresh',
            'POST',
            'void',
        ],
        'getAlbumsByIdSimilar'             => [
            '/Albums/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getArtistsByIdSimilar'            => [
            '/Artists/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getGamesByIdSimilar'              => [
            '/Games/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getItemsByIdDeleteinfo'           => [
            '/Items/{Id}/DeleteInfo',
            'GET',
            '\\EmbyClient\\Model\\Library\\DeleteInfo',
        ],
        'getItemsByIdSimilar'              => [
            '/Items/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getItemsByIdDownload'             => [
            '/Items/{Id}/Download',
            'GET',
            'mixed',
        ],
        'getItemsByIdFile'                 => [
            '/Items/{Id}/File',
            'GET',
            'mixed',
        ],
        'getItemsByIdAncestors'            => [
            '/Items/{Id}/Ancestors',
            'GET',
            'array',
        ],
        'getItemsByIdCriticreviews'        => [
            '/Items/{Id}/CriticReviews',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'postItemsByIdDelete'              => [
            '/Items/{Id}/Delete',
            'POST',
            'void',
        ],
        'getItemsByIdThememedia'           => [
            '/Items/{Id}/ThemeMedia',
            'GET',
            '\\EmbyClient\\Model\\AllThemeMediaResult',
        ],
        'getItemsByIdThemesongs'           => [
            '/Items/{Id}/ThemeSongs',
            'GET',
            '\\EmbyClient\\Model\\ThemeMediaResult',
        ],
        'getItemsByIdThemevideos'          => [
            '/Items/{Id}/ThemeVideos',
            'GET',
            '\\EmbyClient\\Model\\ThemeMediaResult',
        ],
        'postLibrarySeriesAdded'           => [
            '/Library/Series/Added',
            'POST',
            'void',
        ],
        'postLibrarySeriesUpdated'         => [
            '/Library/Series/Updated',
            'POST',
            'void',
        ],
        'postLibraryMediaUpdated'          => [
            '/Library/Media/Updated',
            'POST',
            'void',
        ],
        'postLibraryMoviesAdded'           => [
            '/Library/Movies/Added',
            'POST',
            'void',
        ],
        'postLibraryMoviesUpdated'         => [
            '/Library/Movies/Updated',
            'POST',
            'void',
        ],
        'getMoviesByIdSimilar'             => [
            '/Movies/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getShowsByIdSimilar'              => [
            '/Shows/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getTrailersByIdSimilar'           => [
            '/Trailers/{Id}/Similar',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
    ];
    protected static array $queryParameters  = [
        '/Items/Counts'             => [
            'userId'     => true,
            'isFavorite' => true,
        ],
        '/Items/Delete'             => [
            'ids' => true,
        ],
        '/Library/MediaFolders'     => [
            'isHidden' => true,
        ],
        '/Albums/{Id}/Similar'      => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Artists/{Id}/Similar'     => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Games/{Id}/Similar'       => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Items/{Id}/Similar'       => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Items/{Id}/Ancestors'     => [
            'userId' => true,
        ],
        '/Items/{Id}/CriticReviews' => [
            'startIndex' => true,
            'limit'      => true,
        ],
        '/Items/{Id}/ThemeMedia'    => [
            'userId'            => true,
            'inheritFromParent' => true,
        ],
        '/Items/{Id}/ThemeSongs'    => [
            'userId'            => true,
            'inheritFromParent' => true,
        ],
        '/Items/{Id}/ThemeVideos'   => [
            'userId'            => true,
            'inheritFromParent' => true,
        ],
        '/Movies/{Id}/Similar'      => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Shows/{Id}/Similar'       => [
            'includeItemTypes' => true,
            'enableImages'     => true,
            'enableUserData'   => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'userId'           => true,
            'limit'            => true,
            'fields'           => true,
        ],
        '/Trailers/{Id}/Similar'    => [
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
        '/Items/{Id}'               => [
            'id' => true,
        ],
        '/Albums/{Id}/Similar'      => [
            'id' => true,
        ],
        '/Artists/{Id}/Similar'     => [
            'id' => true,
        ],
        '/Games/{Id}/Similar'       => [
            'id' => true,
        ],
        '/Items/{Id}/DeleteInfo'    => [
            'id' => true,
        ],
        '/Items/{Id}/Similar'       => [
            'id' => true,
        ],
        '/Items/{Id}/Download'      => [
            'id' => true,
        ],
        '/Items/{Id}/File'          => [
            'id' => true,
        ],
        '/Items/{Id}/Ancestors'     => [
            'id' => true,
        ],
        '/Items/{Id}/CriticReviews' => [
            'id' => true,
        ],
        '/Items/{Id}/Delete'        => [
            'id' => true,
        ],
        '/Items/{Id}/ThemeMedia'    => [
            'id' => true,
        ],
        '/Items/{Id}/ThemeSongs'    => [
            'id' => true,
        ],
        '/Items/{Id}/ThemeVideos'   => [
            'id' => true,
        ],
        '/Movies/{Id}/Similar'      => [
            'id' => true,
        ],
        '/Shows/{Id}/Similar'       => [
            'id' => true,
        ],
        '/Trailers/{Id}/Similar'    => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    public function getItemsCounts(
        string $userId,
        null|bool $isFavorite = null
    ): \EmbyClient\Model\ItemCounts {
        return $this->makeApiCall(__FUNCTION__, $userId, $isFavorite);
    }

    /**
     * Gets info to debug intros
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Persistence\IntroDebugInfo[]
     */
    public function getItemsIntros(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public function postItemsDelete(string $ids): void
    {
        $this->makeApiCall(__FUNCTION__, $ids);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public function deleteItemsById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    public function getLibrariesAvailableoptions(): \EmbyClient\Model\Library\LibraryOptionsResult
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets all user media folders.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Library\MediaFolder[]
     */
    public function getLibrarySelectablemediafolders(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets all user media folders.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLibraryMediafolders(null|bool $isHidden = null): \EmbyClient\Model\QueryResult\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__, $isHidden);
    }

    /**
     * Gets a list of physical paths from virtual folders
     * Requires authentication as administrator.
     *
     * @return string[]
     */
    public function getLibraryPhysicalpaths(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Starts a library scan
     * Requires authentication as administrator.
     */
    public function postLibraryRefresh(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Finds albums similar to a given album.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getAlbumsByIdSimilar(
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
     * Finds albums similar to a given album.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getArtistsByIdSimilar(
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
     * Finds games similar to a given game.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getGamesByIdSimilar(
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
     * Gets delete info for an item
     * Requires authentication as user.
     */
    public function getItemsByIdDeleteinfo(string $id): \EmbyClient\Model\Library\DeleteInfo
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets similar items
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getItemsByIdSimilar(
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
     * Downloads item media
     * Requires authentication as user.
     */
    public function getItemsByIdDownload(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets the original file of an item
     * Requires authentication as user.
     */
    public function getItemsByIdFile(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets all parents of an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getItemsByIdAncestors(
        string $userId,
        string $id
    ): array {
        return $this->makeApiCall(__FUNCTION__, $userId, $id);
    }

    /**
     * Gets critic reviews for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getItemsByIdCriticreviews(
        string $id,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $limit, $startIndex);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public function postItemsByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets theme videos and songs for an item
     * Requires authentication as user.
     */
    public function getItemsByIdThememedia(
        string $userId,
        string $id,
        bool $inheritFromParent
    ): \EmbyClient\Model\AllThemeMediaResult {
        return $this->makeApiCall(__FUNCTION__, $userId, $id, $inheritFromParent);
    }

    /**
     * Gets theme songs for an item
     * Requires authentication as user.
     */
    public function getItemsByIdThemesongs(
        string $userId,
        string $id,
        bool $inheritFromParent
    ): \EmbyClient\Model\ThemeMediaResult {
        return $this->makeApiCall(__FUNCTION__, $userId, $id, $inheritFromParent);
    }

    /**
     * Gets theme videos for an item
     * Requires authentication as user.
     */
    public function getItemsByIdThemevideos(
        string $userId,
        string $id,
        bool $inheritFromParent
    ): \EmbyClient\Model\ThemeMediaResult {
        return $this->makeApiCall(__FUNCTION__, $userId, $id, $inheritFromParent);
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public function postLibrarySeriesAdded(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public function postLibrarySeriesUpdated(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Reports that new movies have been added by an external source
     * Requires authentication as user.
     */
    public function postLibraryMediaUpdated(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public function postLibraryMoviesAdded(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public function postLibraryMoviesUpdated(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Finds movies and trailers similar to a given movie.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getMoviesByIdSimilar(
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
     * Finds tv shows similar to a given one.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getShowsByIdSimilar(
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
     * Finds movies and trailers similar to a given trailer.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getTrailersByIdSimilar(
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

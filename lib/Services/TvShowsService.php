<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class TvShowsService extends ApiService
{
    protected static array $endpoints        = [
        'getShowsUpcoming'     => [
            '/Shows/Upcoming',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getShowsNextup'       => [
            '/Shows/NextUp',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getShowsByIdSeasons'  => [
            '/Shows/{Id}/Seasons',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getShowsByIdEpisodes' => [
            '/Shows/{Id}/Episodes',
            'GET',
            'mixed',
            false,
        ],
    ];
    protected static array $queryParameters  = [
        '/Shows/Upcoming'      => [
            'userId'           => true,
            'startIndex'       => true,
            'limit'            => true,
            'fields'           => true,
            'parentId'         => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
        ],
        '/Shows/NextUp'        => [
            'userId'           => true,
            'startIndex'       => true,
            'limit'            => true,
            'fields'           => true,
            'seriesId'         => true,
            'parentId'         => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
        ],
        '/Shows/{Id}/Seasons'  => [
            'userId'           => true,
            'fields'           => true,
            'isSpecialSeason'  => true,
            'isMissing'        => true,
            'adjacentTo'       => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
        ],
        '/Shows/{Id}/Episodes' => [
            'season'                         => true,
            'seasonId'                       => true,
            'startItemId'                    => true,
            'artistType'                     => true,
            'maxOfficialRating'              => true,
            'hasThemeSong'                   => true,
            'hasThemeVideo'                  => true,
            'hasSubtitles'                   => true,
            'hasSpecialFeature'              => true,
            'hasTrailer'                     => true,
            'adjacentTo'                     => true,
            'minIndexNumber'                 => true,
            'minPlayers'                     => true,
            'maxPlayers'                     => true,
            'parentIndexNumber'              => true,
            'hasParentalRating'              => true,
            'isHD'                           => true,
            'locationTypes'                  => true,
            'excludeLocationTypes'           => true,
            'isMissing'                      => true,
            'isUnaired'                      => true,
            'minCommunityRating'             => true,
            'minCriticRating'                => true,
            'airedDuringSeason'              => true,
            'minPremiereDate'                => true,
            'minDateLastSaved'               => true,
            'minDateLastSavedForUser'        => true,
            'maxPremiereDate'                => true,
            'hasOverview'                    => true,
            'hasImdbId'                      => true,
            'hasTmdbId'                      => true,
            'hasTvdbId'                      => true,
            'excludeItemIds'                 => true,
            'startIndex'                     => true,
            'limit'                          => true,
            'recursive'                      => true,
            'searchTerm'                     => true,
            'sortOrder'                      => true,
            'parentId'                       => true,
            'fields'                         => true,
            'excludeItemTypes'               => true,
            'includeItemTypes'               => true,
            'anyProviderIdEquals'            => true,
            'filters'                        => true,
            'isFavorite'                     => true,
            'isMovie'                        => true,
            'isSeries'                       => true,
            'isNews'                         => true,
            'isKids'                         => true,
            'isSports'                       => true,
            'mediaTypes'                     => true,
            'imageTypes'                     => true,
            'sortBy'                         => true,
            'isPlayed'                       => true,
            'genres'                         => true,
            'officialRatings'                => true,
            'tags'                           => true,
            'years'                          => true,
            'enableImages'                   => true,
            'enableUserData'                 => true,
            'imageTypeLimit'                 => true,
            'enableImageTypes'               => true,
            'person'                         => true,
            'personIds'                      => true,
            'personTypes'                    => true,
            'studios'                        => true,
            'studioIds'                      => true,
            'artists'                        => true,
            'artistIds'                      => true,
            'albums'                         => true,
            'ids'                            => true,
            'videoTypes'                     => true,
            'containers'                     => true,
            'audioCodecs'                    => true,
            'videoCodecs'                    => true,
            'subtitleCodecs'                 => true,
            'path'                           => true,
            'userId'                         => true,
            'minOfficialRating'              => true,
            'isLocked'                       => true,
            'isPlaceHolder'                  => true,
            'hasOfficialRating'              => true,
            'groupItemsIntoCollections'      => true,
            'is3D'                           => true,
            'seriesStatus'                   => true,
            'nameStartsWithOrGreater'        => true,
            'artistStartsWithOrGreater'      => true,
            'albumArtistStartsWithOrGreater' => true,
            'nameStartsWith'                 => true,
            'nameLessThan'                   => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/Shows/{Id}/Seasons'  => [
            'id' => true,
        ],
        '/Shows/{Id}/Episodes' => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets a list of upcoming episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getShowsUpcoming(
        string $userId,
        string $fields,
        string $parentId,
        string $enableImageTypes,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $fields, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Gets a list of next up episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getShowsNextup(
        string $userId,
        string $fields,
        string $seriesId,
        string $parentId,
        string $enableImageTypes,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $fields, $seriesId, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Gets seasons for a tv series
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getShowsByIdSeasons(
        string $userId,
        string $fields,
        string $id,
        string $adjacentTo,
        string $enableImageTypes,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|bool $isMissing = null,
        null|bool $isSpecialSeason = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $fields, $id, $adjacentTo, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $isMissing, $isSpecialSeason);
    }

    /**
     * Gets episodes for a tv season
     * Requires authentication as user.
     */
    public function getShowsByIdEpisodes(
        string $id,
        string $officialRatings,
        string $personTypes,
        string $personIds,
        string $person,
        string $enableImageTypes,
        string $years,
        string $tags,
        string $genres,
        string $studioIds,
        string $sortBy,
        string $imageTypes,
        string $mediaTypes,
        string $filters,
        string $anyProviderIdEquals,
        string $includeItemTypes,
        string $excludeItemTypes,
        string $studios,
        string $artists,
        string $parentId,
        string $userId,
        string $nameStartsWith,
        string $albumArtistStartsWithOrGreater,
        string $artistStartsWithOrGreater,
        string $nameStartsWithOrGreater,
        string $seriesStatus,
        bool $groupItemsIntoCollections,
        string $minOfficialRating,
        string $path,
        string $artistIds,
        string $subtitleCodecs,
        string $videoCodecs,
        string $audioCodecs,
        string $containers,
        string $videoTypes,
        string $ids,
        string $albums,
        string $fields,
        string $nameLessThan,
        string $sortOrder,
        string $maxPremiereDate,
        string $artistType,
        string $maxOfficialRating,
        string $adjacentTo,
        string $locationTypes,
        string $excludeLocationTypes,
        string $searchTerm,
        string $seasonId,
        string $minPremiereDate,
        string $minDateLastSaved,
        string $minDateLastSavedForUser,
        string $startItemId,
        bool $recursive,
        string $excludeItemIds,
        null|bool $isPlaceHolder = null,
        null|bool $hasSubtitles = null,
        null|bool $hasTrailer = null,
        null|int $minIndexNumber = null,
        null|int $maxPlayers = null,
        null|bool $hasParentalRating = null,
        null|bool $enableImages = null,
        null|bool $isKids = null,
        null|bool $isSports = null,
        null|bool $hasTvdbId = null,
        null|bool $hasOverview = null,
        null|bool $isPlayed = null,
        null|bool $hasThemeVideo = null,
        null|bool $hasThemeSong = null,
        null|bool $enableUserData = null,
        null|bool $hasImdbId = null,
        null|int $imageTypeLimit = null,
        null|int $parentIndexNumber = null,
        null|bool $isNews = null,
        null|int $minPlayers = null,
        null|int $airedDuringSeason = null,
        null|int $startIndex = null,
        null|bool $isSeries = null,
        null|bool $hasSpecialFeature = null,
        null|bool $isMovie = null,
        null|bool $isLocked = null,
        null|bool $isUnaired = null,
        null|bool $hasOfficialRating = null,
        null|bool $isMissing = null,
        null|bool $is3D = null,
        null|int $season = null,
        null|int $limit = null,
        null|bool $isHD = null,
        null|float $minCriticRating = null,
        null|bool $hasTmdbId = null,
        null|bool $isFavorite = null,
        null|float $minCommunityRating = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $filters, $anyProviderIdEquals, $includeItemTypes, $excludeItemTypes, $studios, $artists, $parentId, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $fields, $nameLessThan, $sortOrder, $maxPremiereDate, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $searchTerm, $seasonId, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $startItemId, $recursive, $excludeItemIds, $isPlaceHolder, $hasSubtitles, $hasTrailer, $minIndexNumber, $maxPlayers, $hasParentalRating, $enableImages, $isKids, $isSports, $hasTvdbId, $hasOverview, $isPlayed, $hasThemeVideo, $hasThemeSong, $enableUserData, $hasImdbId, $imageTypeLimit, $parentIndexNumber, $isNews, $minPlayers, $airedDuringSeason, $startIndex, $isSeries, $hasSpecialFeature, $isMovie, $isLocked, $isUnaired, $hasOfficialRating, $isMissing, $is3D, $season, $limit, $isHD, $minCriticRating, $hasTmdbId, $isFavorite, $minCommunityRating);
    }
}

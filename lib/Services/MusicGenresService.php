<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class MusicGenresService extends ApiService
{
    protected static array $endpoints        = [
        'getMusicgenres'       => [
            '/MusicGenres',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
        ],
        'getMusicgenresByName' => [
            '/MusicGenres/{Name}',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
        ],
    ];
    protected static array $queryParameters  = [
        '/MusicGenres'        => [
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
        '/MusicGenres/{Name}' => [
            'userId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/MusicGenres/{Name}' => [
            'name' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets all music genres from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public function getMusicgenres(
        string $artistType,
        string $tags,
        string $studios,
        string $personTypes,
        string $personIds,
        string $person,
        string $enableImageTypes,
        string $years,
        string $officialRatings,
        string $artists,
        string $genres,
        string $sortBy,
        string $imageTypes,
        string $mediaTypes,
        string $maxOfficialRating,
        string $filters,
        string $studioIds,
        string $artistIds,
        string $includeItemTypes,
        string $minOfficialRating,
        string $nameStartsWith,
        string $albumArtistStartsWithOrGreater,
        string $artistStartsWithOrGreater,
        string $nameStartsWithOrGreater,
        string $seriesStatus,
        bool $groupItemsIntoCollections,
        string $userId,
        string $albums,
        string $path,
        string $subtitleCodecs,
        string $videoCodecs,
        string $audioCodecs,
        string $containers,
        string $videoTypes,
        string $ids,
        string $anyProviderIdEquals,
        string $nameLessThan,
        string $excludeItemTypes,
        string $excludeItemIds,
        string $adjacentTo,
        string $locationTypes,
        string $excludeLocationTypes,
        string $fields,
        string $minDateLastSaved,
        string $minDateLastSavedForUser,
        string $maxPremiereDate,
        string $minPremiereDate,
        bool $recursive,
        string $parentId,
        string $sortOrder,
        string $searchTerm,
        null|bool $hasThemeSong = null,
        null|bool $hasTrailer = null,
        null|bool $hasSubtitles = null,
        null|int $maxPlayers = null,
        null|bool $hasTvdbId = null,
        null|int $startIndex = null,
        null|bool $hasParentalRating = null,
        null|bool $hasOverview = null,
        null|bool $isKids = null,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|bool $hasImdbId = null,
        null|bool $hasTmdbId = null,
        null|int $limit = null,
        null|bool $isNews = null,
        null|bool $isFavorite = null,
        null|int $minIndexNumber = null,
        null|bool $isHD = null,
        null|bool $isPlaceHolder = null,
        null|int $parentIndexNumber = null,
        null|bool $isPlayed = null,
        null|int $minPlayers = null,
        null|bool $isSports = null,
        null|bool $isLocked = null,
        null|bool $isMovie = null,
        null|bool $hasOfficialRating = null,
        null|int $airedDuringSeason = null,
        null|bool $is3D = null,
        null|float $minCriticRating = null,
        null|bool $hasSpecialFeature = null,
        null|float $minCommunityRating = null,
        null|bool $hasThemeVideo = null,
        null|bool $isUnaired = null,
        null|bool $isSeries = null,
        null|bool $isMissing = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a music genre, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public function getMusicgenresByName(
        string $name,
        string $userId
    ): \EmbyClient\Model\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $name, $userId);
    }
}
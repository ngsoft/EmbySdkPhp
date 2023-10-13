<?php

declare(strict_types=1);

namespace EmbyClient;

class ApiClient implements Client
{
    /**
     * Gets all artists from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getArtists(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ArtistsService::create()->getArtists($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets an artist, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getArtistsByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\ArtistsService::create()->getArtistsByName($name, $userId);
    }

    /**
     * Gets all album artists from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getArtistsAlbumartists(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ArtistsService::create()->getArtistsAlbumartists($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getAudiocodecs(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getAudiocodecs($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getContainers(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getContainers($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getItemtypes(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getItemtypes($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getStreamlanguages(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getStreamlanguages($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getSubtitlecodecs(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getSubtitlecodecs($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getTags(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getTags($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getVideocodecs(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getVideocodecs($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     */
    public static function getYears(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\TagItem
    {
        return Model\Services\TagService::create()->getYears($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\NameValuePair[]
     */
    public static function getArtistsPrefixes(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): array
    {
        return Model\Services\TagService::create()->getArtistsPrefixes($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\NameValuePair[]
     */
    public static function getItemsPrefixes(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): array
    {
        return Model\Services\TagService::create()->getItemsPrefixes($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Adds new tags to an item
     * Requires authentication as user.
     */
    public static function postItemsByIdTagsAdd(string $id): void
    {
        Model\Services\TagService::create()->postItemsByIdTagsAdd($id);
    }

    /**
     * Gets available channels
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getChannels(string $userId, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ChannelService::create()->getChannels($userId, $limit, $startIndex);
    }

    /**
     * Creates a new collection
     * Requires authentication as user.
     */
    public static function postCollections(bool $isLocked, string $name, string $parentId, string $ids): Model\Collections\CollectionCreationResult
    {
        return Model\Services\CollectionService::create()->postCollections($isLocked, $name, $parentId, $ids);
    }

    /**
     * Adds items to a collection
     * Requires authentication as user.
     */
    public static function postCollectionsByIdItems(string $ids, string $id): void
    {
        Model\Services\CollectionService::create()->postCollectionsByIdItems($ids, $id);
    }

    /**
     * Removes items from a collection
     * Requires authentication as user.
     */
    public static function deleteCollectionsByIdItems(string $ids, string $id): void
    {
        Model\Services\CollectionService::create()->deleteCollectionsByIdItems($ids, $id);
    }

    /**
     * Removes items from a collection
     * Requires authentication as user.
     */
    public static function postCollectionsByIdItemsDelete(string $ids, string $id): void
    {
        Model\Services\CollectionService::create()->postCollectionsByIdItemsDelete($ids, $id);
    }

    /**
     * Gets all devices
     * Requires authentication as administrator.
     */
    public static function getDevices(): Model\QueryResult\Devices\DeviceInfo
    {
        return Model\Services\DeviceService::create()->getDevices();
    }

    /**
     * Deletes a device
     * Requires authentication as administrator.
     */
    public static function deleteDevices(string $id): mixed
    {
        return Model\Services\DeviceService::create()->deleteDevices($id);
    }

    /**
     * Gets options for a device
     * Requires authentication as administrator.
     */
    public static function getDevicesOptions(string $id): Model\Devices\DeviceOptions
    {
        return Model\Services\DeviceService::create()->getDevicesOptions($id);
    }

    /**
     * Updates device options
     * Requires authentication as administrator.
     */
    public static function postDevicesOptions(string $id): void
    {
        Model\Services\DeviceService::create()->postDevicesOptions($id);
    }

    /**
     * Gets info for a device
     * Requires authentication as administrator.
     */
    public static function getDevicesInfo(string $id): Model\Devices\DeviceInfo
    {
        return Model\Services\DeviceService::create()->getDevicesInfo($id);
    }

    /**
     * Gets camera upload history for a device
     * Requires authentication as user.
     */
    public static function getDevicesCamerauploads(string $deviceId): Model\Devices\ContentUploadHistory
    {
        return Model\Services\DeviceService::create()->getDevicesCamerauploads($deviceId);
    }

    /**
     * Uploads content
     * Requires authentication as user.
     */
    public static function postDevicesCamerauploads(string $deviceId, string $album, string $name, string $id): void
    {
        Model\Services\DeviceService::create()->postDevicesCamerauploads($deviceId, $album, $name, $id);
    }

    /**
     * Deletes a device
     * Requires authentication as administrator.
     */
    public static function postDevicesDelete(string $id): mixed
    {
        return Model\Services\DeviceService::create()->postDevicesDelete($id);
    }

    /**
     * Gets all Game genres from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getGamegenres(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\GameGenresService::create()->getGamegenres($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a Game genre, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getGamegenresByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\GameGenresService::create()->getGamegenresByName($name, $userId);
    }

    /**
     * Gets all genres from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getGenres(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\GenresService::create()->getGenres($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a genre, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getGenresByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\GenresService::create()->getGenresByName($name, $userId);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getItems(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ItemsService::create()->getItems($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public static function deleteItems(string $ids): void
    {
        Model\Services\ItemsService::create()->deleteItems($ids);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Browsing-the-Library API Documentation: Browsing the Library
     */
    public static function getUsersByUseridItems(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ItemsService::create()->getUsersByUseridItems($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets items based on a query.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getUsersByUseridItemsResume(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\ItemsService::create()->getUsersByUseridItemsResume($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets all music genres from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getMusicgenres(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\MusicGenresService::create()->getMusicgenres($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a music genre, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getMusicgenresByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\MusicGenresService::create()->getMusicgenresByName($name, $userId);
    }

    /**
     * Gets items based on a query.
     * No authentication required.
     */
    public static function getOfficialratings(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\UserLibrary\OfficialRatingItem
    {
        return Model\Services\OfficialRatingService::create()->getOfficialratings($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets the OpenAPI 3 specifications
     * No authentication required.
     */
    public static function getOpenapi(): string
    {
        return Model\Services\OpenApiService::create()->getOpenapi();
    }

    /**
     * Gets OpenAPI 3 specifications
     * No authentication required.
     */
    public static function getOpenapiJson(): string
    {
        return Model\Services\OpenApiService::create()->getOpenapiJson();
    }

    /**
     * Gets the swagger specifications
     * No authentication required.
     */
    public static function getSwagger(): string
    {
        return Model\Services\OpenApiService::create()->getSwagger();
    }

    /**
     * Gets the swagger specifications
     * No authentication required.
     */
    public static function getSwaggerJson(): string
    {
        return Model\Services\OpenApiService::create()->getSwaggerJson();
    }

    /**
     * Gets available packages
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Updates\PackageInfo[]
     */
    public static function getPackages(string $packageType, string $targetSystems, ?bool $isAdult = null, ?bool $isPremium = null): array
    {
        return Model\Services\PackageService::create()->getPackages($packageType, $targetSystems, $isAdult, $isPremium);
    }

    /**
     * Gets available package updates for currently installed packages
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Updates\PackageVersionInfo[]
     */
    public static function getPackagesUpdates(string $packageType): array
    {
        return Model\Services\PackageService::create()->getPackagesUpdates($packageType);
    }

    /**
     * Gets a package, by name or assembly guid
     * Requires authentication as user.
     */
    public static function getPackagesByName(string $name, string $assemblyGuid): Model\Updates\PackageInfo
    {
        return Model\Services\PackageService::create()->getPackagesByName($name, $assemblyGuid);
    }

    /**
     * Installs a package
     * Requires authentication as administrator.
     */
    public static function postPackagesInstalledByName(string $name, string $assemblyGuid, string $version, Model\Updates\PackageVersionClass $updateClass): void
    {
        Model\Services\PackageService::create()->postPackagesInstalledByName($name, $assemblyGuid, $version, $updateClass);
    }

    /**
     * Cancels a package installation
     * Requires authentication as administrator.
     */
    public static function deletePackagesInstallingById(string $id): void
    {
        Model\Services\PackageService::create()->deletePackagesInstallingById($id);
    }

    /**
     * Cancels a package installation
     * Requires authentication as administrator.
     */
    public static function postPackagesInstallingByIdDelete(string $id): void
    {
        Model\Services\PackageService::create()->postPackagesInstallingByIdDelete($id);
    }

    /**
     * Gets all persons from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getPersons(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\PersonsService::create()->getPersons($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a person, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getPersonsByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\PersonsService::create()->getPersonsByName($name, $userId);
    }

    /**
     * Creates a new playlist
     * Requires authentication as user.
     */
    public static function postPlaylists(string $name, string $ids, string $mediaType): Model\Playlists\PlaylistCreationResult
    {
        return Model\Services\PlaylistService::create()->postPlaylists($name, $ids, $mediaType);
    }

    /**
     * Gets the original items of a playlist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getPlaylistsByIdItems(string $id, string $userId, string $fields, string $enableImageTypes, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\PlaylistService::create()->getPlaylistsByIdItems($id, $userId, $fields, $enableImageTypes, $imageTypeLimit, $enableUserData, $enableImages, $limit, $startIndex);
    }

    /**
     * Adds items to a playlist
     * Requires authentication as user.
     */
    public static function postPlaylistsByIdItems(string $userId, string $ids, string $id): void
    {
        Model\Services\PlaylistService::create()->postPlaylistsByIdItems($userId, $ids, $id);
    }

    /**
     * Removes items from a playlist
     * Requires authentication as user.
     */
    public static function deletePlaylistsByIdItems(string $id, string $entryIds): void
    {
        Model\Services\PlaylistService::create()->deletePlaylistsByIdItems($id, $entryIds);
    }

    /**
     * Removes items from a playlist
     * Requires authentication as user.
     */
    public static function postPlaylistsByIdItemsDelete(string $id, string $entryIds): void
    {
        Model\Services\PlaylistService::create()->postPlaylistsByIdItemsDelete($id, $entryIds);
    }

    /**
     * Moves a playlist item
     * Requires authentication as user.
     */
    public static function postPlaylistsByIdItemsByItemidMoveByNewindex(int $itemId, string $id, int $newIndex): void
    {
        Model\Services\PlaylistService::create()->postPlaylistsByIdItemsByItemidMoveByNewindex($itemId, $id, $newIndex);
    }

    /**
     * Gets a list of currently installed plugins
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Plugins\PluginInfo[]
     */
    public static function getPlugins(): array
    {
        return Model\Services\PluginService::create()->getPlugins();
    }

    /**
     * Uninstalls a plugin
     * Requires authentication as administrator.
     */
    public static function deletePluginsById(string $id): void
    {
        Model\Services\PluginService::create()->deletePluginsById($id);
    }

    /**
     * Gets a plugin thumb image
     * No authentication required.
     */
    public static function getPluginsByIdThumb(string $id): mixed
    {
        return Model\Services\PluginService::create()->getPluginsByIdThumb($id);
    }

    /**
     * Gets a plugin's configuration
     * Requires authentication as user.
     */
    public static function getPluginsByIdConfiguration(string $id): mixed
    {
        return Model\Services\PluginService::create()->getPluginsByIdConfiguration($id);
    }

    /**
     * Updates a plugin's configuration
     * Requires authentication as user.
     */
    public static function postPluginsByIdConfiguration(string $id): void
    {
        Model\Services\PluginService::create()->postPluginsByIdConfiguration($id);
    }

    /**
     * Uninstalls a plugin
     * Requires authentication as administrator.
     */
    public static function postPluginsByIdDelete(string $id): void
    {
        Model\Services\PluginService::create()->postPluginsByIdDelete($id);
    }

    /**
     * Gets scheduled tasks
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Tasks\TaskInfo[]
     */
    public static function getScheduledtasks(?bool $isEnabled = null, ?bool $isHidden = null): array
    {
        return Model\Services\ScheduledTaskService::create()->getScheduledtasks($isEnabled, $isHidden);
    }

    /**
     * Gets a scheduled task, by Id
     * Requires authentication as administrator.
     */
    public static function getScheduledtasksById(string $id): Model\Tasks\TaskInfo
    {
        return Model\Services\ScheduledTaskService::create()->getScheduledtasksById($id);
    }

    /**
     * Starts a scheduled task
     * Requires authentication as administrator.
     */
    public static function postScheduledtasksRunningById(string $id): void
    {
        Model\Services\ScheduledTaskService::create()->postScheduledtasksRunningById($id);
    }

    /**
     * Stops a scheduled task
     * Requires authentication as administrator.
     */
    public static function deleteScheduledtasksRunningById(string $id): void
    {
        Model\Services\ScheduledTaskService::create()->deleteScheduledtasksRunningById($id);
    }

    /**
     * Updates the triggers for a scheduled task
     * Requires authentication as administrator.
     */
    public static function postScheduledtasksByIdTriggers(string $id): void
    {
        Model\Services\ScheduledTaskService::create()->postScheduledtasksByIdTriggers($id);
    }

    /**
     * Stops a scheduled task
     * Requires authentication as administrator.
     */
    public static function postScheduledtasksRunningByIdDelete(string $id): void
    {
        Model\Services\ScheduledTaskService::create()->postScheduledtasksRunningByIdDelete($id);
    }

    /**
     * Gets a list of sessions
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Session\SessionInfo[]
     */
    public static function getSessions(string $controllableByUserId, string $deviceId, string $id): array
    {
        return Model\Services\SessionsService::create()->getSessions($controllableByUserId, $deviceId, $id);
    }

    /**
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public static function getAuthProviders(): array
    {
        return Model\Services\SessionsService::create()->getAuthProviders();
    }

    public static function getAuthKeys(int $startIndex, ?int $limit = null): mixed
    {
        return Model\Services\SessionsService::create()->getAuthKeys($startIndex, $limit);
    }

    public static function postAuthKeys(string $app): mixed
    {
        return Model\Services\SessionsService::create()->postAuthKeys($app);
    }

    /**
     * Gets a the current play queue from a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getSessionsPlayqueue(string $id, string $deviceId): Model\QueryResult\BaseItemDto
    {
        return Model\Services\SessionsService::create()->getSessionsPlayqueue($id, $deviceId);
    }

    /**
     * Reports that a session has ended
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public static function postSessionsLogout(): void
    {
        Model\Services\SessionsService::create()->postSessionsLogout();
    }

    /**
     * Updates capabilities for a device
     * Requires authentication as user.
     */
    public static function postSessionsCapabilities(string $id, string $playableMediaTypes, string $supportedCommands, bool $supportsMediaControl, bool $supportsSync): void
    {
        Model\Services\SessionsService::create()->postSessionsCapabilities($id, $playableMediaTypes, $supportedCommands, $supportsMediaControl, $supportsSync);
    }

    public static function deleteAuthKeysByKey(string $key): mixed
    {
        return Model\Services\SessionsService::create()->deleteAuthKeysByKey($key);
    }

    /**
     * Instructs a session to browse to an item or view
     * Requires authentication as user.
     */
    public static function postSessionsByIdViewing(string $id, string $itemType, string $itemId, string $itemName): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdViewing($id, $itemType, $itemId, $itemName);
    }

    /**
     * Issues a command to a client to display a message to the user
     * Requires authentication as user.
     */
    public static function postSessionsByIdMessage(string $id, string $text, string $header, ?int $timeoutMs = null): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdMessage($id, $text, $header, $timeoutMs);
    }

    /**
     * Instructs a session to play an item
     * Requires authentication as user.
     */
    public static function postSessionsByIdPlaying(string $id, array $itemIds, Model\PlayCommand $playCommand, ?int $startPositionTicks = null): mixed
    {
        return Model\Services\SessionsService::create()->postSessionsByIdPlaying($id, $itemIds, $playCommand, $startPositionTicks);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public static function postSessionsByIdCommand(string $id): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdCommand($id);
    }

    /**
     * Updates capabilities for a device
     * Requires authentication as user.
     */
    public static function postSessionsCapabilitiesFull(string $id): void
    {
        Model\Services\SessionsService::create()->postSessionsCapabilitiesFull($id);
    }

    public static function postAuthKeysByKeyDelete(string $key): mixed
    {
        return Model\Services\SessionsService::create()->postAuthKeysByKeyDelete($key);
    }

    /**
     * Issues a playstate command to a client
     * Requires authentication as user.
     */
    public static function postSessionsByIdPlayingByCommand(string $id, Model\PlaystateCommand $command): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdPlayingByCommand($id, $command);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public static function postSessionsByIdSystemByCommand(string $id, string $command): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdSystemByCommand($id, $command);
    }

    /**
     * Issues a system command to a client
     * Requires authentication as user.
     */
    public static function postSessionsByIdCommandByCommand(string $id, string $command): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdCommandByCommand($id, $command);
    }

    /**
     * Adds an additional user to a session
     * Requires authentication as user.
     */
    public static function postSessionsByIdUsersByUserid(string $id, string $userId): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdUsersByUserid($id, $userId);
    }

    /**
     * Removes an additional user from a session
     * Requires authentication as user.
     */
    public static function deleteSessionsByIdUsersByUserid(string $id, string $userId): void
    {
        Model\Services\SessionsService::create()->deleteSessionsByIdUsersByUserid($id, $userId);
    }

    /**
     * Removes an additional user from a session
     * Requires authentication as user.
     */
    public static function postSessionsByIdUsersByUseridDelete(string $id, string $userId): void
    {
        Model\Services\SessionsService::create()->postSessionsByIdUsersByUseridDelete($id, $userId);
    }

    /**
     * Gets all studios from a given item, folder, or the entire library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getStudios(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\StudiosService::create()->getStudios($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets a studio, by name
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Items-by-name API Documentation: Items by name
     */
    public static function getStudiosByName(string $name, string $userId): Model\BaseItemDto
    {
        return Model\Services\StudiosService::create()->getStudiosByName($name, $userId);
    }

    /**
     * Finds movies and trailers similar to a given trailer.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getTrailers(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\TrailersService::create()->getTrailers($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    public static function getItemsByIdImagesByTypeByIndexByTagByFormatByMaxwidthByMaxheightByPercentplayedByUnplayedcount(string $id, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getItemsByIdImagesByTypeByIndexByTagByFormatByMaxwidthByMaxheightByPercentplayedByUnplayedcount($id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Gets information about an item's images
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageInfo[]
     */
    public static function getItemsByIdImages(string $id): array
    {
        return Model\Services\ImageService::create()->getItemsByIdImages($id);
    }

    public static function getArtistsByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getArtistsByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getGamegenresByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getGamegenresByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getGenresByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getGenresByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getItemsByIdImagesByType(string $id, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getItemsByIdImagesByType($id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as administrator.
     */
    public static function postItemsByIdImagesByType(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByType($id, $type, $index);
    }

    public static function deleteItemsByIdImagesByType(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->deleteItemsByIdImagesByType($id, $type, $index);
    }

    public static function getMusicgenresByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getMusicgenresByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getPersonsByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getPersonsByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getStudiosByNameImagesByType(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getStudiosByNameImagesByType($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public static function getUsersByIdImagesByType(string $id, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getUsersByIdImagesByType($id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as user.
     */
    public static function postUsersByIdImagesByType(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postUsersByIdImagesByType($id, $type, $index);
    }

    public static function deleteUsersByIdImagesByType(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->deleteUsersByIdImagesByType($id, $type, $index);
    }

    public static function getArtistsByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getArtistsByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getGamegenresByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getGamegenresByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getGenresByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getGenresByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getItemsByIdImagesByTypeByIndex(string $id, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getItemsByIdImagesByTypeByIndex($id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as administrator.
     */
    public static function postItemsByIdImagesByTypeByIndex(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByTypeByIndex($id, $type, $index);
    }

    public static function deleteItemsByIdImagesByTypeByIndex(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->deleteItemsByIdImagesByTypeByIndex($id, $type, $index);
    }

    public static function postItemsByIdImagesByTypeDelete(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByTypeDelete($id, $type, $index);
    }

    public static function getMusicgenresByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getMusicgenresByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getPersonsByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getPersonsByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getStudiosByNameImagesByTypeByIndex(string $name, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getStudiosByNameImagesByTypeByIndex($name, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    public static function getUsersByIdImagesByTypeByIndex(string $id, int $maxWidth, Model\ImageType $type, bool $autoOrient, string $foregroundLayer, string $backgroundColor, int $unplayedCount, bool $addPlayedIndicator, string $format, bool $enableImageEnhancers, string $tag, int $quality, int $height, int $width, int $maxHeight, int $index, ?float $percentPlayed = null, ?bool $cropWhitespace = null): mixed
    {
        return Model\Services\ImageService::create()->getUsersByIdImagesByTypeByIndex($id, $maxWidth, $type, $autoOrient, $foregroundLayer, $backgroundColor, $unplayedCount, $addPlayedIndicator, $format, $enableImageEnhancers, $tag, $quality, $height, $width, $maxHeight, $index, $percentPlayed, $cropWhitespace);
    }

    /**
     * Uploads an image for an item, must be base64 encoded.
     * Requires authentication as user.
     */
    public static function postUsersByIdImagesByTypeByIndex(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postUsersByIdImagesByTypeByIndex($id, $type, $index);
    }

    public static function deleteUsersByIdImagesByTypeByIndex(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->deleteUsersByIdImagesByTypeByIndex($id, $type, $index);
    }

    public static function postUsersByIdImagesByTypeDelete(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postUsersByIdImagesByTypeDelete($id, $type, $index);
    }

    public static function postItemsByIdImagesByTypeByIndexDelete(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByTypeByIndexDelete($id, $type, $index);
    }

    /**
     * Updates the index for an item image
     * Requires authentication as administrator.
     */
    public static function postItemsByIdImagesByTypeByIndexIndex(string $id, Model\ImageType $type, int $index, int $newIndex): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByTypeByIndexIndex($id, $type, $index, $newIndex);
    }

    /**
     * Updates the index for an item image
     * Requires authentication as administrator.
     */
    public static function postItemsByIdImagesByTypeByIndexUrl(string $id, Model\ImageType $type, int $index, string $url): void
    {
        Model\Services\ImageService::create()->postItemsByIdImagesByTypeByIndexUrl($id, $type, $index, $url);
    }

    public static function postUsersByIdImagesByTypeByIndexDelete(string $id, Model\ImageType $type, int $index): void
    {
        Model\Services\ImageService::create()->postUsersByIdImagesByTypeByIndexDelete($id, $type, $index);
    }

    /**
     * Creates an instant playlist based on a given artist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getArtistsInstantmix(string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getArtistsInstantmix($includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Gets a list of next up episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getAudiobooksNextup(string $userId, string $fields, string $albumId, string $parentId, string $enableImageTypes, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getAudiobooksNextup($userId, $fields, $albumId, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Creates an instant playlist based on a music genre
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getMusicgenresInstantmix(string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getMusicgenresInstantmix($includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given album
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getAlbumsByIdInstantmix(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getAlbumsByIdInstantmix($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getItemsByIdInstantmix(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getItemsByIdInstantmix($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a music genre
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getMusicgenresByNameInstantmix(string $name, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getMusicgenresByNameInstantmix($name, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given playlist
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getPlaylistsByIdInstantmix(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getPlaylistsByIdInstantmix($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Creates an instant playlist based on a given song
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getSongsByIdInstantmix(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\InstantMixService::create()->getSongsByIdInstantmix($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Gets branding configuration
     * No authentication required.
     */
    public static function getBrandingConfiguration(): Model\Branding\BrandingOptions
    {
        return Model\Services\BrandingService::create()->getBrandingConfiguration();
    }

    /**
     * Gets custom css
     * No authentication required.
     */
    public static function getBrandingCss(): mixed
    {
        return Model\Services\BrandingService::create()->getBrandingCss();
    }

    /**
     * Gets custom css
     * No authentication required.
     */
    public static function getBrandingCssCss(): mixed
    {
        return Model\Services\BrandingService::create()->getBrandingCssCss();
    }

    /**
     * Creates a Connect link for a user
     * Requires authentication as administrator.
     */
    public static function getConnectPending(): mixed
    {
        return Model\Services\ConnectService::create()->getConnectPending();
    }

    /**
     * Gets the corresponding local user from a connect user id
     * Requires authentication as user.
     */
    public static function getConnectExchange(string $connectUserId): Model\Connect\ConnectAuthenticationExchangeResult
    {
        return Model\Services\ConnectService::create()->getConnectExchange($connectUserId);
    }

    /**
     * Creates a Connect link for a user
     * Requires authentication as administrator.
     */
    public static function postUsersByIdConnectLink(string $id, string $connectUsername): Model\Connect\UserLinkResult
    {
        return Model\Services\ConnectService::create()->postUsersByIdConnectLink($id, $connectUsername);
    }

    /**
     * Removes a Connect link for a user
     * Requires authentication as administrator.
     */
    public static function deleteUsersByIdConnectLink(string $id): void
    {
        Model\Services\ConnectService::create()->deleteUsersByIdConnectLink($id);
    }

    /**
     * Removes a Connect link for a user
     * Requires authentication as administrator.
     */
    public static function postUsersByIdConnectLinkDelete(string $id): void
    {
        Model\Services\ConnectService::create()->postUsersByIdConnectLinkDelete($id);
    }

    /**
     * Gets a user's display preferences for an item
     * Requires authentication as user.
     */
    public static function getDisplaypreferencesById(string $id, string $userId, string $client): Model\DisplayPreferences
    {
        return Model\Services\DisplayPreferencesService::create()->getDisplaypreferencesById($id, $userId, $client);
    }

    /**
     * Updates a user's display preferences for an item
     * Requires authentication as user.
     */
    public static function postDisplaypreferencesByDisplaypreferencesid(string $displayPreferencesId, string $userId): void
    {
        Model\Services\DisplayPreferencesService::create()->postDisplaypreferencesByDisplaypreferencesid($displayPreferencesId, $userId);
    }

    /**
     * Gets a list of profiles
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Emby\Dlna\Profiles\DlnaProfile[]
     */
    public static function getDlnaProfileinfos(): array
    {
        return Model\Services\DlnaService::create()->getDlnaProfileinfos();
    }

    /**
     * Creates a profile
     * Requires authentication as administrator.
     */
    public static function postDlnaProfiles(): void
    {
        Model\Services\DlnaService::create()->postDlnaProfiles();
    }

    /**
     * Gets a single profile
     * Requires authentication as administrator.
     */
    public static function getDlnaProfilesById(string $id): Model\Emby\Dlna\Profiles\DlnaProfile
    {
        return Model\Services\DlnaService::create()->getDlnaProfilesById($id);
    }

    /**
     * Updates a profile
     * Requires authentication as administrator.
     */
    public static function postDlnaProfilesById(string $id): void
    {
        Model\Services\DlnaService::create()->postDlnaProfilesById($id);
    }

    /**
     * Deletes a profile
     * Requires authentication as administrator.
     */
    public static function deleteDlnaProfilesById(string $id): void
    {
        Model\Services\DlnaService::create()->deleteDlnaProfilesById($id);
    }

    /**
     * Gets the default profile
     * Requires authentication as administrator.
     */
    public static function getDlnaProfilesDefault(): Model\Emby\Dlna\Profiles\DlnaProfile
    {
        return Model\Services\DlnaService::create()->getDlnaProfilesDefault();
    }

    /**
     * Gets available tone mapping options
     * Requires authentication as administrator.
     */
    public static function getEncodingTonemapoptions(): Model\MediaEncoding\Configuration\ToneMapping\ToneMapOptionsVisibility
    {
        return Model\Services\EncodingInfoService::create()->getEncodingTonemapoptions();
    }

    /**
     * Gets details about available video encoders and decoders
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\MediaEncoding\Codecs\VideoCodecs\VideoCodecBase[]
     */
    public static function getEncodingCodecinformationVideo(): array
    {
        return Model\Services\EncodingInfoService::create()->getEncodingCodecinformationVideo();
    }

    /**
     * Gets default codec configurations
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Configuration\CodecConfiguration[]
     */
    public static function getEncodingCodecconfigurationDefaults(): array
    {
        return Model\Services\EncodingInfoService::create()->getEncodingCodecconfigurationDefaults();
    }

    /**
     * Gets the tone mapping options
     * Requires authentication as user.
     */
    public static function getEncodingFulltonemapoptions(): Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return Model\Services\ToneMapOptionsService::create()->getEncodingFulltonemapoptions();
    }

    /**
     * Updates the tone mapping options
     * Requires authentication as administrator.
     */
    public static function postEncodingFulltonemapoptions(): void
    {
        Model\Services\ToneMapOptionsService::create()->postEncodingFulltonemapoptions();
    }

    /**
     * Gets the tone mapping options
     * Requires authentication as user.
     */
    public static function getEncodingPublictonemapoptions(): Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return Model\Services\ToneMapOptionsService::create()->getEncodingPublictonemapoptions();
    }

    /**
     * Updates the tone mapping options
     * Requires authentication as administrator.
     */
    public static function postEncodingPublictonemapoptions(): void
    {
        Model\Services\ToneMapOptionsService::create()->postEncodingPublictonemapoptions();
    }

    /**
     * Gets the subtitle options
     * Requires authentication as user.
     */
    public static function getEncodingSubtitleoptions(): Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return Model\Services\SubtitleOptionsService::create()->getEncodingSubtitleoptions();
    }

    /**
     * Updates the subtitle options
     * Requires authentication as administrator.
     */
    public static function postEncodingSubtitleoptions(): void
    {
        Model\Services\SubtitleOptionsService::create()->postEncodingSubtitleoptions();
    }

    /**
     * Gets the ffmpeg options
     * Requires authentication as user.
     */
    public static function getEncodingFfmpegoptions(): Model\Emby\Web\GenericEdit\EditObjectContainer
    {
        return Model\Services\FfmpegOptionsService::create()->getEncodingFfmpegoptions();
    }

    /**
     * Updates the ffmpeg options
     * Requires authentication as administrator.
     */
    public static function postEncodingFfmpegoptions(): void
    {
        Model\Services\FfmpegOptionsService::create()->postEncodingFfmpegoptions();
    }

    /**
     * Gets the contents of a given directory in the file system
     * Requires authentication as administrator.
     */
    public static function postEnvironmentValidatepath(string $path): mixed
    {
        return Model\Services\EnvironmentService::create()->postEnvironmentValidatepath($path);
    }

    /**
     * Gets the parent path of a given path
     * Requires authentication as administrator.
     */
    public static function getEnvironmentDefaultdirectorybrowser(): Model\DefaultDirectoryBrowserInfo
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentDefaultdirectorybrowser();
    }

    /**
     * Gets the contents of a given directory in the file system
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public static function getEnvironmentDirectorycontents(string $path, bool $includeFiles, bool $includeDirectories): array
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentDirectorycontents($path, $includeFiles, $includeDirectories);
    }

    /**
     * Gets shares from a network device
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public static function getEnvironmentNetworkshares(string $path): array
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentNetworkshares($path);
    }

    /**
     * Gets available drives from the server's file system
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public static function getEnvironmentDrives(): array
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentDrives();
    }

    /**
     * Gets a list of devices on the network
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\IO\FileSystemEntryInfo[]
     */
    public static function getEnvironmentNetworkdevices(): array
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentNetworkdevices();
    }

    /**
     * Gets the parent path of a given path
     * Requires authentication as administrator.
     */
    public static function getEnvironmentParentpath(string $path): string
    {
        return Model\Services\EnvironmentService::create()->getEnvironmentParentpath($path);
    }

    /**
     * Finds games similar to a given game.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\GameSystemSummary[]
     */
    public static function getGamesSystemsummaries(string $userId): array
    {
        return Model\Services\GamesService::create()->getGamesSystemsummaries($userId);
    }

    /**
     * Gets all media info image by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public static function getImagesMediainfo(): array
    {
        return Model\Services\ImageByNameService::create()->getImagesMediainfo();
    }

    /**
     * Gets all rating images by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public static function getImagesRatings(): array
    {
        return Model\Services\ImageByNameService::create()->getImagesRatings();
    }

    /**
     * Gets all general images by name
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageByNameInfo[]
     */
    public static function getImagesGeneral(): array
    {
        return Model\Services\ImageByNameService::create()->getImagesGeneral();
    }

    /**
     * Gets a general image by name
     * No authentication required.
     */
    public static function getImagesGeneralByNameByType(string $name, string $type): mixed
    {
        return Model\Services\ImageByNameService::create()->getImagesGeneralByNameByType($name, $type);
    }

    /**
     * Gets a rating image by name
     * No authentication required.
     */
    public static function getImagesRatingsByThemeByName(string $name, string $theme): mixed
    {
        return Model\Services\ImageByNameService::create()->getImagesRatingsByThemeByName($name, $theme);
    }

    /**
     * Gets a media info image by name
     * No authentication required.
     */
    public static function getImagesMediainfoByThemeByName(string $name, string $theme): mixed
    {
        return Model\Services\ImageByNameService::create()->getImagesMediainfoByThemeByName($name, $theme);
    }

    /**
     * Gets a remote image
     * Requires authentication as administrator.
     */
    public static function getImagesRemote(string $imageUrl): mixed
    {
        return Model\Services\RemoteImageService::create()->getImagesRemote($imageUrl);
    }

    /**
     * Gets available remote images for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdRemoteimages(string $id, Model\ImageType $type, string $providerName, bool $includeAllLanguages, ?int $limit = null, ?int $startIndex = null): Model\RemoteImageResult
    {
        return Model\Services\RemoteImageService::create()->getItemsByIdRemoteimages($id, $type, $providerName, $includeAllLanguages, $limit, $startIndex);
    }

    /**
     * Gets available remote image providers for an item
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ImageProviderInfo[]
     */
    public static function getItemsByIdRemoteimagesProviders(string $id): array
    {
        return Model\Services\RemoteImageService::create()->getItemsByIdRemoteimagesProviders($id);
    }

    /**
     * Downloads a remote image for an item
     * Requires authentication as administrator.
     */
    public static function postItemsByIdRemoteimagesDownload(string $id, Model\ImageType $type, string $providerName, string $imageUrl): void
    {
        Model\Services\RemoteImageService::create()->postItemsByIdRemoteimagesDownload($id, $type, $providerName, $imageUrl);
    }

    /**
     * Updates an item
     * Requires authentication as administrator.
     */
    public static function postItemsByItemid(string $itemId): void
    {
        Model\Services\ItemUpdateService::create()->postItemsByItemid($itemId);
    }

    /**
     * Gets metadata editor info for an item
     * Requires authentication as administrator.
     */
    public static function getItemsByItemidMetadataeditor(string $itemId): Model\MetadataEditorInfo
    {
        return Model\Services\ItemUpdateService::create()->getItemsByItemidMetadataeditor($itemId);
    }

    public static function getItemsCounts(string $userId, ?bool $isFavorite = null): Model\ItemCounts
    {
        return Model\Services\LibraryService::create()->getItemsCounts($userId, $isFavorite);
    }

    /**
     * Gets info to debug intros
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\Persistence\IntroDebugInfo[]
     */
    public static function getItemsIntros(): array
    {
        return Model\Services\LibraryService::create()->getItemsIntros();
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public static function postItemsDelete(string $ids): void
    {
        Model\Services\LibraryService::create()->postItemsDelete($ids);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public static function deleteItemsById(string $id): void
    {
        Model\Services\LibraryService::create()->deleteItemsById($id);
    }

    public static function getLibrariesAvailableoptions(): Model\Library\LibraryOptionsResult
    {
        return Model\Services\LibraryService::create()->getLibrariesAvailableoptions();
    }

    /**
     * Gets all user media folders.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Library\MediaFolder[]
     */
    public static function getLibrarySelectablemediafolders(): array
    {
        return Model\Services\LibraryService::create()->getLibrarySelectablemediafolders();
    }

    /**
     * Gets all user media folders.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLibraryMediafolders(?bool $isHidden = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getLibraryMediafolders($isHidden);
    }

    /**
     * Gets a list of physical paths from virtual folders
     * Requires authentication as administrator.
     *
     * @return string[]
     */
    public static function getLibraryPhysicalpaths(): array
    {
        return Model\Services\LibraryService::create()->getLibraryPhysicalpaths();
    }

    /**
     * Starts a library scan
     * Requires authentication as administrator.
     */
    public static function postLibraryRefresh(): void
    {
        Model\Services\LibraryService::create()->postLibraryRefresh();
    }

    /**
     * Finds albums similar to a given album.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getAlbumsByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getAlbumsByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Finds albums similar to a given album.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getArtistsByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getArtistsByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Finds games similar to a given game.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getGamesByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getGamesByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Gets delete info for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdDeleteinfo(string $id): Model\Library\DeleteInfo
    {
        return Model\Services\LibraryService::create()->getItemsByIdDeleteinfo($id);
    }

    /**
     * Gets similar items
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getItemsByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getItemsByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Downloads item media
     * Requires authentication as user.
     */
    public static function getItemsByIdDownload(string $id): mixed
    {
        return Model\Services\LibraryService::create()->getItemsByIdDownload($id);
    }

    /**
     * Gets the original file of an item
     * Requires authentication as user.
     */
    public static function getItemsByIdFile(string $id): mixed
    {
        return Model\Services\LibraryService::create()->getItemsByIdFile($id);
    }

    /**
     * Gets all parents of an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public static function getItemsByIdAncestors(string $userId, string $id): array
    {
        return Model\Services\LibraryService::create()->getItemsByIdAncestors($userId, $id);
    }

    /**
     * Gets critic reviews for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getItemsByIdCriticreviews(string $id, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getItemsByIdCriticreviews($id, $limit, $startIndex);
    }

    /**
     * Deletes an item from the library and file system
     * Requires authentication as user.
     */
    public static function postItemsByIdDelete(string $id): void
    {
        Model\Services\LibraryService::create()->postItemsByIdDelete($id);
    }

    /**
     * Gets theme videos and songs for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdThememedia(string $userId, string $id, bool $inheritFromParent): Model\AllThemeMediaResult
    {
        return Model\Services\LibraryService::create()->getItemsByIdThememedia($userId, $id, $inheritFromParent);
    }

    /**
     * Gets theme songs for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdThemesongs(string $userId, string $id, bool $inheritFromParent): Model\ThemeMediaResult
    {
        return Model\Services\LibraryService::create()->getItemsByIdThemesongs($userId, $id, $inheritFromParent);
    }

    /**
     * Gets theme videos for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdThemevideos(string $userId, string $id, bool $inheritFromParent): Model\ThemeMediaResult
    {
        return Model\Services\LibraryService::create()->getItemsByIdThemevideos($userId, $id, $inheritFromParent);
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public static function postLibrarySeriesAdded(): void
    {
        Model\Services\LibraryService::create()->postLibrarySeriesAdded();
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public static function postLibrarySeriesUpdated(): void
    {
        Model\Services\LibraryService::create()->postLibrarySeriesUpdated();
    }

    /**
     * Reports that new movies have been added by an external source
     * Requires authentication as user.
     */
    public static function postLibraryMediaUpdated(): void
    {
        Model\Services\LibraryService::create()->postLibraryMediaUpdated();
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public static function postLibraryMoviesAdded(): void
    {
        Model\Services\LibraryService::create()->postLibraryMoviesAdded();
    }

    /**
     * Deprecated. Use /Library/Media/Updated
     * Requires authentication as user.
     */
    public static function postLibraryMoviesUpdated(): void
    {
        Model\Services\LibraryService::create()->postLibraryMoviesUpdated();
    }

    /**
     * Finds movies and trailers similar to a given movie.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getMoviesByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getMoviesByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Finds tv shows similar to a given one.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getShowsByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getShowsByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Finds movies and trailers similar to a given trailer.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getTrailersByIdSimilar(string $id, string $includeItemTypes, string $enableImageTypes, string $userId, string $fields, ?int $limit = null, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LibraryService::create()->getTrailersByIdSimilar($id, $includeItemTypes, $enableImageTypes, $userId, $fields, $limit, $imageTypeLimit, $enableUserData, $enableImages);
    }

    public static function postLibraryVirtualfolders(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfolders();
    }

    public static function deleteLibraryVirtualfolders(): void
    {
        Model\Services\LibraryStructureService::create()->deleteLibraryVirtualfolders();
    }

    public static function getLibraryVirtualfoldersQuery(int $startIndex, ?int $limit = null): Model\QueryResult\VirtualFolderInfo
    {
        return Model\Services\LibraryStructureService::create()->getLibraryVirtualfoldersQuery($startIndex, $limit);
    }

    public static function postLibraryVirtualfoldersLibraryoptions(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersLibraryoptions();
    }

    public static function postLibraryVirtualfoldersName(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersName();
    }

    public static function postLibraryVirtualfoldersDelete(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersDelete();
    }

    public static function postLibraryVirtualfoldersPaths(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersPaths();
    }

    public static function deleteLibraryVirtualfoldersPaths(): void
    {
        Model\Services\LibraryStructureService::create()->deleteLibraryVirtualfoldersPaths();
    }

    public static function postLibraryVirtualfoldersPathsUpdate(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersPathsUpdate();
    }

    public static function postLibraryVirtualfoldersPathsDelete(): void
    {
        Model\Services\LibraryStructureService::create()->postLibraryVirtualfoldersPathsDelete();
    }

    /**
     * Opens a media source
     * Requires authentication as user.
     */
    public static function postLivestreamsOpen(): Model\MediaInfo\LiveStreamResponse
    {
        return Model\Services\MediaInfoService::create()->postLivestreamsOpen();
    }

    /**
     * Closes a media source
     * Requires authentication as user.
     */
    public static function postLivestreamsClose(string $liveStreamId): void
    {
        Model\Services\MediaInfoService::create()->postLivestreamsClose($liveStreamId);
    }

    /**
     * Closes a media source
     * Requires authentication as user.
     */
    public static function postLivestreamsMediainfo(string $liveStreamId): mixed
    {
        return Model\Services\MediaInfoService::create()->postLivestreamsMediainfo($liveStreamId);
    }

    public static function getPlaybackBitratetest(int $size): mixed
    {
        return Model\Services\MediaInfoService::create()->getPlaybackBitratetest($size);
    }

    /**
     * Gets live playback media info for an item
     * Requires authentication as user.
     */
    public static function getItemsByIdPlaybackinfo(string $id, string $userId): Model\MediaInfo\PlaybackInfoResponse
    {
        return Model\Services\MediaInfoService::create()->getItemsByIdPlaybackinfo($id, $userId);
    }

    /**
     * Gets live playback media info for an item
     * Requires authentication as user.
     */
    public static function postItemsByIdPlaybackinfo(string $id): Model\MediaInfo\PlaybackInfoResponse
    {
        return Model\Services\MediaInfoService::create()->postItemsByIdPlaybackinfo($id);
    }

    /**
     * Gets live tv channel tags
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvChanneltags(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvChanneltags($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets the top level live tv folder
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvFolder(): Model\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvFolder();
    }

    public static function getLivetvChannelmappings(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvChannelmappings($providerId);
    }

    public static function postLivetvChannelmappings(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->postLivetvChannelmappings($providerId);
    }

    public static function putLivetvChannelmappings(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->putLivetvChannelmappings($providerId);
    }

    public static function deleteLivetvChannelmappings(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->deleteLivetvChannelmappings($providerId);
    }

    public static function getLivetvChannelmappingoptions(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvChannelmappingoptions($providerId);
    }

    public static function postLivetvChannelmappingoptions(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->postLivetvChannelmappingoptions($providerId);
    }

    public static function putLivetvChannelmappingoptions(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->putLivetvChannelmappingoptions($providerId);
    }

    public static function deleteLivetvChannelmappingoptions(string $providerId): mixed
    {
        return Model\Services\LiveTvService::create()->deleteLivetvChannelmappingoptions($providerId);
    }

    /**
     * Gets current listing providers
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\ListingsProviderInfo[]
     */
    public static function getLivetvListingproviders(string $channelId): array
    {
        return Model\Services\LiveTvService::create()->getLivetvListingproviders($channelId);
    }

    /**
     * Adds a listing provider
     * Requires authentication as administrator.
     */
    public static function postLivetvListingproviders(): Model\LiveTv\ListingsProviderInfo
    {
        return Model\Services\LiveTvService::create()->postLivetvListingproviders();
    }

    /**
     * Deletes a listing provider
     * Requires authentication as administrator.
     */
    public static function deleteLivetvListingproviders(string $id): void
    {
        Model\Services\LiveTvService::create()->deleteLivetvListingproviders($id);
    }

    /**
     * Gets tuner hosts
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\TunerHostInfo[]
     */
    public static function getLivetvTunerhosts(): array
    {
        return Model\Services\LiveTvService::create()->getLivetvTunerhosts();
    }

    /**
     * Adds a tuner host
     * Requires authentication as administrator.
     */
    public static function postLivetvTunerhosts(): Model\LiveTv\TunerHostInfo
    {
        return Model\Services\LiveTvService::create()->postLivetvTunerhosts();
    }

    /**
     * Deletes a tuner host
     * Requires authentication as administrator.
     */
    public static function deleteLivetvTunerhosts(string $id): void
    {
        Model\Services\LiveTvService::create()->deleteLivetvTunerhosts($id);
    }

    /**
     * Gets available live tv services.
     * Requires authentication as user.
     */
    public static function getLivetvInfo(): Model\LiveTv\LiveTvInfo
    {
        return Model\Services\LiveTvService::create()->getLivetvInfo();
    }

    /**
     * Gets the epg.
     * Requires authentication as user.
     */
    public static function getLivetvEPG(Model\LiveTv\ChannelType $type, string $userId, bool $addCurrentProgram, string $fields, string $enableImageTypes, bool $enableFavoriteSorting, string $channelIds, string $minEndDate, string $maxEndDate, string $maxStartDate, string $minStartDate, string $genreIds, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $isMovie = null, ?bool $isLiked = null, ?bool $isFavorite = null, ?int $limit = null, ?bool $isKids = null, ?bool $isNews = null, ?bool $isSeries = null, ?bool $enableUserData = null, ?bool $isDisliked = null, ?bool $isSports = null, ?int $startIndex = null): Model\QueryResult\LiveTv\Api\EpgRow
    {
        return Model\Services\LiveTvService::create()->getLivetvEPG($type, $userId, $addCurrentProgram, $fields, $enableImageTypes, $enableFavoriteSorting, $channelIds, $minEndDate, $maxEndDate, $maxStartDate, $minStartDate, $genreIds, $imageTypeLimit, $enableImages, $isMovie, $isLiked, $isFavorite, $limit, $isKids, $isNews, $isSeries, $enableUserData, $isDisliked, $isSports, $startIndex);
    }

    /**
     * Gets available live tv channels.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvChannels(Model\LiveTv\ChannelType $type, string $officialRatings, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $tags, string $genres, string $studioIds, string $sortBy, string $imageTypes, string $mediaTypes, string $filters, string $anyProviderIdEquals, string $includeItemTypes, string $excludeItemTypes, string $studios, string $artists, string $parentId, string $userId, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $minOfficialRating, string $path, string $artistIds, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $albums, string $fields, string $nameLessThan, string $sortOrder, string $maxPremiereDate, bool $addCurrentProgram, string $artistType, string $maxOfficialRating, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $searchTerm, string $minPremiereDate, string $minDateLastSaved, string $minDateLastSavedForUser, bool $enableFavoriteSorting, string $excludeItemIds, bool $recursive, ?bool $isPlaceHolder = null, ?bool $hasThemeVideo = null, ?bool $hasSpecialFeature = null, ?int $minPlayers = null, ?int $parentIndexNumber = null, ?bool $isSeries = null, ?bool $enableImages = null, ?bool $isKids = null, ?bool $isNews = null, ?bool $isSports = null, ?bool $isPlayed = null, ?bool $hasOverview = null, ?bool $hasThemeSong = null, ?bool $enableUserData = null, ?int $startIndex = null, ?int $imageTypeLimit = null, ?bool $hasImdbId = null, ?int $airedDuringSeason = null, ?int $maxPlayers = null, ?bool $isDisliked = null, ?int $minIndexNumber = null, ?bool $isMovie = null, ?bool $hasTrailer = null, ?bool $isUnaired = null, ?bool $hasSubtitles = null, ?bool $isMissing = null, ?bool $isLocked = null, ?bool $isLiked = null, ?bool $hasOfficialRating = null, ?bool $hasTvdbId = null, ?bool $is3D = null, ?bool $isHD = null, ?int $limit = null, ?bool $hasParentalRating = null, ?float $minCriticRating = null, ?bool $hasTmdbId = null, ?bool $isFavorite = null, ?float $minCommunityRating = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvChannels($type, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $filters, $anyProviderIdEquals, $includeItemTypes, $excludeItemTypes, $studios, $artists, $parentId, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $fields, $nameLessThan, $sortOrder, $maxPremiereDate, $addCurrentProgram, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $searchTerm, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $enableFavoriteSorting, $excludeItemIds, $recursive, $isPlaceHolder, $hasThemeVideo, $hasSpecialFeature, $minPlayers, $parentIndexNumber, $isSeries, $enableImages, $isKids, $isNews, $isSports, $isPlayed, $hasOverview, $hasThemeSong, $enableUserData, $startIndex, $imageTypeLimit, $hasImdbId, $airedDuringSeason, $maxPlayers, $isDisliked, $minIndexNumber, $isMovie, $hasTrailer, $isUnaired, $hasSubtitles, $isMissing, $isLocked, $isLiked, $hasOfficialRating, $hasTvdbId, $is3D, $isHD, $limit, $hasParentalRating, $minCriticRating, $hasTmdbId, $isFavorite, $minCommunityRating);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvPrograms(string $channelIds, string $userId, string $enableImageTypes, string $genreIds, string $sortOrder, string $sortBy, string $fields, string $maxEndDate, string $minEndDate, string $maxStartDate, string $minStartDate, ?bool $isSports = null, ?bool $enableUserData = null, ?bool $hasAired = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null, ?bool $isKids = null, ?bool $isNews = null, ?bool $isSeries = null, ?bool $isMovie = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvPrograms($channelIds, $userId, $enableImageTypes, $genreIds, $sortOrder, $sortBy, $fields, $maxEndDate, $minEndDate, $maxStartDate, $minStartDate, $isSports, $enableUserData, $hasAired, $imageTypeLimit, $enableImages, $limit, $startIndex, $isKids, $isNews, $isSeries, $isMovie);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function postLivetvPrograms(string $channelIds, string $userId, string $enableImageTypes, string $genreIds, string $sortOrder, string $sortBy, string $fields, string $maxEndDate, string $minEndDate, string $maxStartDate, string $minStartDate, ?bool $isSports = null, ?bool $enableUserData = null, ?bool $hasAired = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null, ?bool $isKids = null, ?bool $isNews = null, ?bool $isSeries = null, ?bool $isMovie = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->postLivetvPrograms($channelIds, $userId, $enableImageTypes, $genreIds, $sortOrder, $sortBy, $fields, $maxEndDate, $minEndDate, $maxStartDate, $minStartDate, $isSports, $enableUserData, $hasAired, $imageTypeLimit, $enableImages, $limit, $startIndex, $isKids, $isNews, $isSeries, $isMovie);
    }

    /**
     * Gets live tv recordings
     * Requires authentication as user.
     */
    public static function getLivetvRecordings(string $channelId, string $officialRatings, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $tags, string $genres, string $studioIds, string $sortBy, string $imageTypes, string $mediaTypes, Model\LiveTv\RecordingStatus $status, string $filters, string $anyProviderIdEquals, string $includeItemTypes, string $studios, string $artists, string $fields, string $userId, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $minOfficialRating, string $path, string $artistIds, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $albums, string $excludeItemTypes, string $nameLessThan, string $parentId, string $maxPremiereDate, string $artistType, string $maxOfficialRating, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $sortOrder, string $minPremiereDate, string $minDateLastSaved, string $minDateLastSavedForUser, string $seriesTimerId, bool $recursive, string $searchTerm, string $excludeItemIds, ?bool $isPlaceHolder = null, ?bool $hasThemeVideo = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?int $minIndexNumber = null, ?int $imageTypeLimit = null, ?bool $hasParentalRating = null, ?bool $enableImages = null, ?bool $enableUserData = null, ?bool $isNews = null, ?bool $isKids = null, ?bool $isSports = null, ?bool $hasOverview = null, ?bool $isSeries = null, ?bool $hasTmdbId = null, ?int $airedDuringSeason = null, ?int $parentIndexNumber = null, ?bool $isInProgress = null, ?int $minPlayers = null, ?bool $isMovie = null, ?int $limit = null, ?bool $isUnaired = null, ?bool $hasSpecialFeature = null, ?bool $isMissing = null, ?bool $isLocked = null, ?bool $hasThemeSong = null, ?bool $hasOfficialRating = null, ?bool $hasImdbId = null, ?bool $is3D = null, ?bool $isPlayed = null, ?int $startIndex = null, ?bool $isHD = null, ?float $minCriticRating = null, ?bool $hasTvdbId = null, ?bool $isFavorite = null, ?float $minCommunityRating = null): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvRecordings($channelId, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $status, $filters, $anyProviderIdEquals, $includeItemTypes, $studios, $artists, $fields, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $excludeItemTypes, $nameLessThan, $parentId, $maxPremiereDate, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $sortOrder, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $seriesTimerId, $recursive, $searchTerm, $excludeItemIds, $isPlaceHolder, $hasThemeVideo, $hasTrailer, $hasSubtitles, $maxPlayers, $minIndexNumber, $imageTypeLimit, $hasParentalRating, $enableImages, $enableUserData, $isNews, $isKids, $isSports, $hasOverview, $isSeries, $hasTmdbId, $airedDuringSeason, $parentIndexNumber, $isInProgress, $minPlayers, $isMovie, $limit, $isUnaired, $hasSpecialFeature, $isMissing, $isLocked, $hasThemeSong, $hasOfficialRating, $hasImdbId, $is3D, $isPlayed, $startIndex, $isHD, $minCriticRating, $hasTvdbId, $isFavorite, $minCommunityRating);
    }

    /**
     * Gets live tv timers
     * Requires authentication as user.
     */
    public static function getLivetvTimers(string $channelId, string $seriesTimerId): Model\QueryResult\LiveTv\TimerInfoDto
    {
        return Model\Services\LiveTvService::create()->getLivetvTimers($channelId, $seriesTimerId);
    }

    /**
     * Creates a live tv timer
     * Requires authentication as user.
     */
    public static function postLivetvTimers(): void
    {
        Model\Services\LiveTvService::create()->postLivetvTimers();
    }

    /**
     * Gets live tv series timers
     * Requires authentication as user.
     */
    public static function getLivetvSeriestimers(string $sortBy, Model\SortOrder $sortOrder, int $startIndex, ?int $limit = null): Model\QueryResult\LiveTv\SeriesTimerInfoDto
    {
        return Model\Services\LiveTvService::create()->getLivetvSeriestimers($sortBy, $sortOrder, $startIndex, $limit);
    }

    /**
     * Creates a live tv series timer
     * Requires authentication as user.
     */
    public static function postLivetvSeriestimers(): void
    {
        Model\Services\LiveTvService::create()->postLivetvSeriestimers();
    }

    /**
     * Gets guide info
     * Requires authentication as user.
     */
    public static function getLivetvGuideinfo(): Model\LiveTv\GuideInfo
    {
        return Model\Services\LiveTvService::create()->getLivetvGuideinfo();
    }

    /**
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public static function getLivetvTunerhostsTypes(): array
    {
        return Model\Services\LiveTvService::create()->getLivetvTunerhostsTypes();
    }

    /**
     * Gets the channel management list
     * Requires authentication as administrator.
     */
    public static function getLivetvManageChannels(string $sortBy, string $sortOrder, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\Emby\LiveTV\ChannelManagementInfo
    {
        return Model\Services\LiveTvService::create()->getLivetvManageChannels($sortBy, $sortOrder, $limit, $startIndex);
    }

    /**
     * Gets live tv channel tag prefixes
     * No authentication required.
     *
     * @return \EmbyClient\Model\LiveTv\Api\TagItem[]
     */
    public static function getLivetvChanneltagsPrefixes(string $artistType, string $tags, string $studios, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $officialRatings, string $artists, string $genres, string $sortBy, string $imageTypes, string $mediaTypes, string $maxOfficialRating, string $filters, string $studioIds, string $artistIds, string $includeItemTypes, string $minOfficialRating, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $userId, string $albums, string $path, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $anyProviderIdEquals, string $nameLessThan, string $excludeItemTypes, string $excludeItemIds, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $fields, string $minDateLastSaved, string $minDateLastSavedForUser, string $maxPremiereDate, string $minPremiereDate, bool $recursive, string $parentId, string $sortOrder, string $searchTerm, ?bool $hasThemeSong = null, ?bool $hasTrailer = null, ?bool $hasSubtitles = null, ?int $maxPlayers = null, ?bool $hasTvdbId = null, ?int $startIndex = null, ?bool $hasParentalRating = null, ?bool $hasOverview = null, ?bool $isKids = null, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $hasImdbId = null, ?bool $hasTmdbId = null, ?int $limit = null, ?bool $isNews = null, ?bool $isFavorite = null, ?int $minIndexNumber = null, ?bool $isHD = null, ?bool $isPlaceHolder = null, ?int $parentIndexNumber = null, ?bool $isPlayed = null, ?int $minPlayers = null, ?bool $isSports = null, ?bool $isLocked = null, ?bool $isMovie = null, ?bool $hasOfficialRating = null, ?int $airedDuringSeason = null, ?bool $is3D = null, ?float $minCriticRating = null, ?bool $hasSpecialFeature = null, ?float $minCommunityRating = null, ?bool $hasThemeVideo = null, ?bool $isUnaired = null, ?bool $isSeries = null, ?bool $isMissing = null): array
    {
        return Model\Services\LiveTvService::create()->getLivetvChanneltagsPrefixes($artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets recording folders
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public static function getLivetvRecordingsFolders(string $userId): array
    {
        return Model\Services\LiveTvService::create()->getLivetvRecordingsFolders($userId);
    }

    /**
     * @return \EmbyClient\Model\LiveTv\TunerHostInfo[]
     */
    public static function getLivetvTunersDiscvover(): array
    {
        return Model\Services\LiveTvService::create()->getLivetvTunersDiscvover();
    }

    public static function getLivetvListingprovidersDefault(): Model\LiveTv\ListingsProviderInfo
    {
        return Model\Services\LiveTvService::create()->getLivetvListingprovidersDefault();
    }

    /**
     * Deletes a listing provider
     * Requires authentication as administrator.
     */
    public static function postLivetvListingprovidersDelete(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvListingprovidersDelete($id);
    }

    /**
     * Deletes a tuner host
     * Requires authentication as administrator.
     */
    public static function postLivetvTunerhostsDelete(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvTunerhostsDelete($id);
    }

    /**
     * Gets available lineups
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public static function getLivetvListingprovidersLineups(string $id, string $type, string $location, string $country): array
    {
        return Model\Services\LiveTvService::create()->getLivetvListingprovidersLineups($id, $type, $location, $country);
    }

    /**
     * Gets a live tv channel
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvChannelsById(string $id, string $userId): Model\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvChannelsById($id, $userId);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvProgramsRecommended(string $userId, string $enableImageTypes, string $genreIds, string $fields, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $isSports = null, ?bool $isKids = null, ?bool $isNews = null, ?bool $isMovie = null, ?bool $isSeries = null, ?bool $hasAired = null, ?bool $isAiring = null, ?int $limit = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvProgramsRecommended($userId, $enableImageTypes, $genreIds, $fields, $enableUserData, $imageTypeLimit, $enableImages, $isSports, $isKids, $isNews, $isMovie, $isSeries, $hasAired, $isAiring, $limit);
    }

    /**
     * Gets live tv recordings
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvRecordingsSeries(): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvRecordingsSeries();
    }

    /**
     * Gets a live tv recording
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvRecordingsById(string $id, string $userId): Model\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvRecordingsById($id, $userId);
    }

    /**
     * Deletes a live tv recording
     * Requires authentication as user.
     */
    public static function deleteLivetvRecordingsById(string $id): void
    {
        Model\Services\LiveTvService::create()->deleteLivetvRecordingsById($id);
    }

    /**
     * Gets a live tv timer
     * Requires authentication as user.
     */
    public static function getLivetvTimersById(string $id): Model\LiveTv\TimerInfoDto
    {
        return Model\Services\LiveTvService::create()->getLivetvTimersById($id);
    }

    /**
     * Updates a live tv timer
     * Requires authentication as user.
     */
    public static function postLivetvTimersById(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvTimersById($id);
    }

    /**
     * Cancels a live tv timer
     * Requires authentication as user.
     */
    public static function deleteLivetvTimersById(string $id): void
    {
        Model\Services\LiveTvService::create()->deleteLivetvTimersById($id);
    }

    /**
     * Gets a live tv series timer
     * Requires authentication as user.
     */
    public static function getLivetvSeriestimersById(string $id): Model\LiveTv\TimerInfoDto
    {
        return Model\Services\LiveTvService::create()->getLivetvSeriestimersById($id);
    }

    /**
     * Updates a live tv series timer
     * Requires authentication as user.
     */
    public static function postLivetvSeriestimersById(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvSeriestimersById($id);
    }

    /**
     * Cancels a live tv series timer
     * Requires authentication as user.
     */
    public static function deleteLivetvSeriestimersById(string $id): void
    {
        Model\Services\LiveTvService::create()->deleteLivetvSeriestimersById($id);
    }

    /**
     * Gets default values for a new timer
     * Requires authentication as user.
     */
    public static function getLivetvTimersDefaults(string $programId): Model\LiveTv\SeriesTimerInfoDto
    {
        return Model\Services\LiveTvService::create()->getLivetvTimersDefaults($programId);
    }

    /**
     * Gets live tv recording groups
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvRecordingsGroups(): Model\QueryResult\BaseItemDto
    {
        return Model\Services\LiveTvService::create()->getLivetvRecordingsGroups();
    }

    /**
     * Gets listing provider
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\Api\ListingProviderTypeInfo[]
     */
    public static function getLivetvListingprovidersAvailable(): array
    {
        return Model\Services\LiveTvService::create()->getLivetvListingprovidersAvailable();
    }

    /**
     * Gets a live tv channel
     * No authentication required.
     */
    public static function getLivetvLiverecordingsByIdStream(string $id): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvLiverecordingsByIdStream($id);
    }

    /**
     * Gets a live tv channel
     * No authentication required.
     */
    public static function getLivetvLivestreamfilesByIdStreamByContainer(string $id, string $container): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvLivestreamfilesByIdStreamByContainer($id, $container);
    }

    /**
     * Gets available lineups
     * Requires authentication as administrator.
     */
    public static function getLivetvListingprovidersSchedulesdirectCountries(): mixed
    {
        return Model\Services\LiveTvService::create()->getLivetvListingprovidersSchedulesdirectCountries();
    }

    /**
     * Gets tuner hosts
     * Requires authentication as administrator.
     */
    public static function getLivetvTunerhostsDefaultByType(string $type): Model\LiveTv\TunerHostInfo
    {
        return Model\Services\LiveTvService::create()->getLivetvTunerhostsDefaultByType($type);
    }

    /**
     * Deletes a live tv recording
     * Requires authentication as user.
     */
    public static function postLivetvRecordingsByIdDelete(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvRecordingsByIdDelete($id);
    }

    /**
     * Cancels a live tv timer
     * Requires authentication as user.
     */
    public static function postLivetvTimersByIdDelete(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvTimersByIdDelete($id);
    }

    /**
     * Cancels a live tv series timer
     * Requires authentication as user.
     */
    public static function postLivetvSeriestimersByIdDelete(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvSeriestimersByIdDelete($id);
    }

    /**
     * Resets a tv tuner
     * Requires authentication as administrator.
     */
    public static function postLivetvTunersByIdReset(string $id): void
    {
        Model\Services\LiveTvService::create()->postLivetvTunersByIdReset($id);
    }

    /**
     * Sets a channel disabled or not
     * Requires authentication as administrator.
     */
    public static function postLivetvManageChannelsByIdDisabled(string $id): Model\QueryResult\Emby\LiveTV\ChannelManagementInfo
    {
        return Model\Services\LiveTvService::create()->postLivetvManageChannelsByIdDisabled($id);
    }

    /**
     * Sets a channel sort index
     * Requires authentication as administrator.
     */
    public static function postLivetvManageChannelsByIdSortindex(string $id): Model\QueryResult\Emby\LiveTV\ChannelManagementInfo
    {
        return Model\Services\LiveTvService::create()->postLivetvManageChannelsByIdSortindex($id);
    }

    /**
     * Gets known parental ratings
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\ParentalRating[]
     */
    public static function getLocalizationParentalratings(): array
    {
        return Model\Services\LocalizationService::create()->getLocalizationParentalratings();
    }

    /**
     * Gets localization options
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\LocalizatonOption[]
     */
    public static function getLocalizationOptions(): array
    {
        return Model\Services\LocalizationService::create()->getLocalizationOptions();
    }

    /**
     * Gets known countries
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\CountryInfo[]
     */
    public static function getLocalizationCountries(): array
    {
        return Model\Services\LocalizationService::create()->getLocalizationCountries();
    }

    /**
     * Gets known cultures
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Globalization\CultureDto[]
     */
    public static function getLocalizationCultures(): array
    {
        return Model\Services\LocalizationService::create()->getLocalizationCultures();
    }

    /**
     * Gets movie recommendations
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\RecommendationDto[]
     */
    public static function getMoviesRecommendations(int $categoryLimit, int $itemLimit, string $userId, string $parentId, string $enableImageTypes, ?int $imageTypeLimit = null, ?bool $enableUserData = null, ?bool $enableImages = null): array
    {
        return Model\Services\MoviesService::create()->getMoviesRecommendations($categoryLimit, $itemLimit, $userId, $parentId, $enableImageTypes, $imageTypeLimit, $enableUserData, $enableImages);
    }

    /**
     * Gets notification types
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Notifications\NotificationTypeInfo[]
     */
    public static function getNotificationsTypes(): array
    {
        return Model\Services\NotificationsService::create()->getNotificationsTypes();
    }

    /**
     * Gets notification types
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public static function getNotificationsServices(): array
    {
        return Model\Services\NotificationsService::create()->getNotificationsServices();
    }

    /**
     * Sends a notification to all admin users
     * Requires authentication as user.
     */
    public static function postNotificationsAdmin(string $name, string $description, string $imageUrl, string $url, Model\Notifications\NotificationLevel $level): void
    {
        Model\Services\NotificationsService::create()->postNotificationsAdmin($name, $description, $imageUrl, $url, $level);
    }

    /**
     * Gets notifications
     * Requires authentication as user.
     */
    public static function getNotificationsByUserid(string $userId, ?int $limit = null, ?int $startIndex = null, ?bool $isRead = null): Model\Emby\Notifications\Api\NotificationResult
    {
        return Model\Services\NotificationsService::create()->getNotificationsByUserid($userId, $limit, $startIndex, $isRead);
    }

    /**
     * Gets a notification summary for a user
     * Requires authentication as user.
     */
    public static function getNotificationsByUseridSummary(string $userId): Model\Emby\Notifications\Api\NotificationsSummary
    {
        return Model\Services\NotificationsService::create()->getNotificationsByUseridSummary($userId);
    }

    /**
     * Marks notifications as read
     * Requires authentication as user.
     */
    public static function postNotificationsByUseridRead(string $userId, string $ids): void
    {
        Model\Services\NotificationsService::create()->postNotificationsByUseridRead($userId, $ids);
    }

    /**
     * Marks notifications as unread
     * Requires authentication as user.
     */
    public static function postNotificationsByUseridUnread(string $userId, string $ids): void
    {
        Model\Services\NotificationsService::create()->postNotificationsByUseridUnread($userId, $ids);
    }

    /**
     * Reports playback has started within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public static function postSessionsPlaying(): void
    {
        Model\Services\PlaystateService::create()->postSessionsPlaying();
    }

    /**
     * Reports playback progress within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public static function postSessionsPlayingProgress(): void
    {
        Model\Services\PlaystateService::create()->postSessionsPlayingProgress();
    }

    /**
     * Pings a playback session
     * Requires authentication as user.
     */
    public static function postSessionsPlayingPing(string $playSessionId): void
    {
        Model\Services\PlaystateService::create()->postSessionsPlayingPing($playSessionId);
    }

    /**
     * Reports playback has stopped within a session
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public static function postSessionsPlayingStopped(): void
    {
        Model\Services\PlaystateService::create()->postSessionsPlayingStopped();
    }

    /**
     * Marks an item as played
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public static function postUsersByUseridPlayeditemsById(string $userId, string $datePlayed, string $id): Model\UserItemDataDto
    {
        return Model\Services\PlaystateService::create()->postUsersByUseridPlayeditemsById($userId, $datePlayed, $id);
    }

    /**
     * Marks an item as unplayed
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Playback-Check-ins API Documentation: Playback Check ins
     */
    public static function deleteUsersByUseridPlayeditemsById(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\PlaystateService::create()->deleteUsersByUseridPlayeditemsById($userId, $id);
    }

    /**
     * Reports that a user has begun playing an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridPlayingitemsById(string $userId, string $id, string $mediaSourceId, bool $canSeek, Model\PlayMethod $playMethod, string $liveStreamId, string $playSessionId, ?int $subtitleStreamIndex = null, ?int $audioStreamIndex = null): void
    {
        Model\Services\PlaystateService::create()->postUsersByUseridPlayingitemsById($userId, $id, $mediaSourceId, $canSeek, $playMethod, $liveStreamId, $playSessionId, $subtitleStreamIndex, $audioStreamIndex);
    }

    /**
     * Reports that a user has stopped playing an item
     * Requires authentication as user.
     */
    public static function deleteUsersByUseridPlayingitemsById(string $userId, string $id, string $mediaSourceId, string $nextMediaType, string $liveStreamId, string $playSessionId, ?int $positionTicks = null): void
    {
        Model\Services\PlaystateService::create()->deleteUsersByUseridPlayingitemsById($userId, $id, $mediaSourceId, $nextMediaType, $liveStreamId, $playSessionId, $positionTicks);
    }

    /**
     * Updates userdata for an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridItemsByItemidUserdata(string $userId, string $itemId): void
    {
        Model\Services\PlaystateService::create()->postUsersByUseridItemsByItemidUserdata($userId, $itemId);
    }

    /**
     * Reports a user's playback progress
     * Requires authentication as user.
     */
    public static function postUsersByUseridPlayingitemsByIdProgress(string $userId, string $id, string $mediaSourceId, bool $isPaused, bool $isMuted, Model\PlayMethod $playMethod, string $liveStreamId, string $playSessionId, Model\RepeatMode $repeatMode, int $subtitleOffset, float $playbackRate, ?int $volumeLevel = null, ?int $subtitleStreamIndex = null, ?int $audioStreamIndex = null, ?int $positionTicks = null): void
    {
        Model\Services\PlaystateService::create()->postUsersByUseridPlayingitemsByIdProgress($userId, $id, $mediaSourceId, $isPaused, $isMuted, $playMethod, $liveStreamId, $playSessionId, $repeatMode, $subtitleOffset, $playbackRate, $volumeLevel, $subtitleStreamIndex, $audioStreamIndex, $positionTicks);
    }

    /**
     * Reports that a user has stopped playing an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridPlayingitemsByIdDelete(string $userId, string $id, string $mediaSourceId, string $nextMediaType, string $liveStreamId, string $playSessionId, ?int $positionTicks = null): void
    {
        Model\Services\PlaystateService::create()->postUsersByUseridPlayingitemsByIdDelete($userId, $id, $mediaSourceId, $nextMediaType, $liveStreamId, $playSessionId, $positionTicks);
    }

    /**
     * Marks an item as unplayed
     * Requires authentication as user.
     */
    public static function postUsersByUseridPlayeditemsByIdDelete(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\PlaystateService::create()->postUsersByUseridPlayeditemsByIdDelete($userId, $id);
    }

    /**
     * Gets a list of upcoming episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getShowsUpcoming(string $userId, string $fields, string $parentId, string $enableImageTypes, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\TvShowsService::create()->getShowsUpcoming($userId, $fields, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Gets a list of next up episodes
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getShowsNextup(string $userId, string $fields, string $seriesId, string $parentId, string $enableImageTypes, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\TvShowsService::create()->getShowsNextup($userId, $fields, $seriesId, $parentId, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $limit, $startIndex);
    }

    /**
     * Gets seasons for a tv series
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getShowsByIdSeasons(string $userId, string $fields, string $id, string $adjacentTo, string $enableImageTypes, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $isMissing = null, ?bool $isSpecialSeason = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\TvShowsService::create()->getShowsByIdSeasons($userId, $fields, $id, $adjacentTo, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $isMissing, $isSpecialSeason);
    }

    /**
     * Gets episodes for a tv season
     * Requires authentication as user.
     */
    public static function getShowsByIdEpisodes(string $id, string $officialRatings, string $personTypes, string $personIds, string $person, string $enableImageTypes, string $years, string $tags, string $genres, string $studioIds, string $sortBy, string $imageTypes, string $mediaTypes, string $filters, string $anyProviderIdEquals, string $includeItemTypes, string $excludeItemTypes, string $studios, string $artists, string $parentId, string $userId, string $nameStartsWith, string $albumArtistStartsWithOrGreater, string $artistStartsWithOrGreater, string $nameStartsWithOrGreater, string $seriesStatus, bool $groupItemsIntoCollections, string $minOfficialRating, string $path, string $artistIds, string $subtitleCodecs, string $videoCodecs, string $audioCodecs, string $containers, string $videoTypes, string $ids, string $albums, string $fields, string $nameLessThan, string $sortOrder, string $maxPremiereDate, string $artistType, string $maxOfficialRating, string $adjacentTo, string $locationTypes, string $excludeLocationTypes, string $searchTerm, string $seasonId, string $minPremiereDate, string $minDateLastSaved, string $minDateLastSavedForUser, string $startItemId, bool $recursive, string $excludeItemIds, ?bool $isPlaceHolder = null, ?bool $hasSubtitles = null, ?bool $hasTrailer = null, ?int $minIndexNumber = null, ?int $maxPlayers = null, ?bool $hasParentalRating = null, ?bool $enableImages = null, ?bool $isKids = null, ?bool $isSports = null, ?bool $hasTvdbId = null, ?bool $hasOverview = null, ?bool $isPlayed = null, ?bool $hasThemeVideo = null, ?bool $hasThemeSong = null, ?bool $enableUserData = null, ?bool $hasImdbId = null, ?int $imageTypeLimit = null, ?int $parentIndexNumber = null, ?bool $isNews = null, ?int $minPlayers = null, ?int $airedDuringSeason = null, ?int $startIndex = null, ?bool $isSeries = null, ?bool $hasSpecialFeature = null, ?bool $isMovie = null, ?bool $isLocked = null, ?bool $isUnaired = null, ?bool $hasOfficialRating = null, ?bool $isMissing = null, ?bool $is3D = null, ?int $season = null, ?int $limit = null, ?bool $isHD = null, ?float $minCriticRating = null, ?bool $hasTmdbId = null, ?bool $isFavorite = null, ?float $minCommunityRating = null): mixed
    {
        return Model\Services\TvShowsService::create()->getShowsByIdEpisodes($id, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $filters, $anyProviderIdEquals, $includeItemTypes, $excludeItemTypes, $studios, $artists, $parentId, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $fields, $nameLessThan, $sortOrder, $maxPremiereDate, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $searchTerm, $seasonId, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $startItemId, $recursive, $excludeItemIds, $isPlaceHolder, $hasSubtitles, $hasTrailer, $minIndexNumber, $maxPlayers, $hasParentalRating, $enableImages, $isKids, $isSports, $hasTvdbId, $hasOverview, $isPlayed, $hasThemeVideo, $hasThemeSong, $enableUserData, $hasImdbId, $imageTypeLimit, $parentIndexNumber, $isNews, $minPlayers, $airedDuringSeason, $startIndex, $isSeries, $hasSpecialFeature, $isMovie, $isLocked, $isUnaired, $hasOfficialRating, $isMissing, $is3D, $season, $limit, $isHD, $minCriticRating, $hasTmdbId, $isFavorite, $minCommunityRating);
    }

    /**
     * Gets a list of available sync targets.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Sync\SyncTarget[]
     */
    public static function getSyncTargets(string $userId): array
    {
        return Model\Services\SyncService::create()->getSyncTargets($userId);
    }

    /**
     * Gets sync jobs.
     * Requires authentication as user.
     */
    public static function getSyncJobs(): Model\QueryResult\Sync\SyncJob
    {
        return Model\Services\SyncService::create()->getSyncJobs();
    }

    /**
     * Gets sync jobs.
     * Requires authentication as user.
     */
    public static function postSyncJobs(): Model\Sync\Model\SyncJobCreationResult
    {
        return Model\Services\SyncService::create()->postSyncJobs();
    }

    /**
     * Gets sync job items.
     * Requires authentication as user.
     */
    public static function getSyncJobitems(): Model\QueryResult\Sync\Model\SyncJobItem
    {
        return Model\Services\SyncService::create()->getSyncJobitems();
    }

    /**
     * Gets a list of available sync targets.
     * Requires authentication as user.
     */
    public static function getSyncOptions(string $userId, string $itemIds, string $parentId, string $targetId, Model\Sync\SyncCategory $category): Model\Sync\Model\SyncDialogOptions
    {
        return Model\Services\SyncService::create()->getSyncOptions($userId, $itemIds, $parentId, $targetId, $category);
    }

    /**
     * Reports an action that occurred while offline.
     * Requires authentication as user.
     */
    public static function postSyncOfflineactions(): void
    {
        Model\Services\SyncService::create()->postSyncOfflineactions();
    }

    /**
     * Syncs data between device and server
     * Requires authentication as user.
     */
    public static function postSyncData(): Model\Sync\Model\SyncDataResponse
    {
        return Model\Services\SyncService::create()->postSyncData();
    }

    /**
     * Gets sync status for an item.
     * Requires authentication as user.
     */
    public static function postSyncByItemidStatus(string $itemId): void
    {
        Model\Services\SyncService::create()->postSyncByItemidStatus($itemId);
    }

    /**
     * Gets a sync job.
     * Requires authentication as user.
     */
    public static function getSyncJobsById(string $id): Model\Sync\SyncJob
    {
        return Model\Services\SyncService::create()->getSyncJobsById($id);
    }

    /**
     * Updates a sync job.
     * Requires authentication as user.
     */
    public static function postSyncJobsById(int $id): void
    {
        Model\Services\SyncService::create()->postSyncJobsById($id);
    }

    /**
     * Cancels a sync job.
     * Requires authentication as user.
     */
    public static function deleteSyncJobsById(string $id): void
    {
        Model\Services\SyncService::create()->deleteSyncJobsById($id);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public static function postSyncItemsCancel(string $itemIds): void
    {
        Model\Services\SyncService::create()->postSyncItemsCancel($itemIds);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public static function deleteSyncByTargetidItems(string $targetId, string $itemIds): void
    {
        Model\Services\SyncService::create()->deleteSyncByTargetidItems($targetId, $itemIds);
    }

    /**
     * Gets ready to download sync items.
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Sync\Model\SyncedItem[]
     */
    public static function getSyncItemsReady(string $targetId): array
    {
        return Model\Services\SyncService::create()->getSyncItemsReady($targetId);
    }

    /**
     * Cancels a sync job item
     * Requires authentication as user.
     */
    public static function deleteSyncJobitemsById(string $id): void
    {
        Model\Services\SyncService::create()->deleteSyncJobitemsById($id);
    }

    /**
     * Cancels a sync job.
     * Requires authentication as user.
     */
    public static function postSyncJobsByIdDelete(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobsByIdDelete($id);
    }

    /**
     * Cancels items from a sync target
     * Requires authentication as user.
     */
    public static function postSyncByTargetidItemsDelete(string $targetId, string $itemIds): void
    {
        Model\Services\SyncService::create()->postSyncByTargetidItemsDelete($targetId, $itemIds);
    }

    /**
     * Reports that a sync job item has successfully been transferred.
     * Requires authentication as user.
     */
    public static function postSyncJobitemsByIdTransferred(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobitemsByIdTransferred($id);
    }

    /**
     * Gets a sync job item file
     * Requires authentication as user.
     */
    public static function getSyncJobitemsByIdFile(string $id): mixed
    {
        return Model\Services\SyncService::create()->getSyncJobitemsByIdFile($id);
    }

    /**
     * Gets a sync job item file
     * Requires authentication as user.
     */
    public static function getSyncJobitemsByIdAdditionalfiles(string $id, string $name): mixed
    {
        return Model\Services\SyncService::create()->getSyncJobitemsByIdAdditionalfiles($id, $name);
    }

    /**
     * Enables a cancelled or queued sync job item
     * Requires authentication as user.
     */
    public static function postSyncJobitemsByIdEnable(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobitemsByIdEnable($id);
    }

    /**
     * Cancels a sync job item
     * Requires authentication as user.
     */
    public static function postSyncJobitemsByIdDelete(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobitemsByIdDelete($id);
    }

    /**
     * Marks a job item for removal
     * Requires authentication as user.
     */
    public static function postSyncJobitemsByIdMarkforremoval(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobitemsByIdMarkforremoval($id);
    }

    /**
     * Unmarks a job item for removal
     * Requires authentication as user.
     */
    public static function postSyncJobitemsByIdUnmarkforremoval(string $id): void
    {
        Model\Services\SyncService::create()->postSyncJobitemsByIdUnmarkforremoval($id);
    }

    /**
     * Gets application configuration
     * Requires authentication as user.
     */
    public static function getSystemConfiguration(): Model\Configuration\ServerConfiguration
    {
        return Model\Services\ConfigurationService::create()->getSystemConfiguration();
    }

    /**
     * Updates application configuration
     * Requires authentication as administrator.
     */
    public static function postSystemConfiguration(): void
    {
        Model\Services\ConfigurationService::create()->postSystemConfiguration();
    }

    /**
     * Gets a named configuration
     * Requires authentication as user.
     */
    public static function getSystemConfigurationByKey(string $key): mixed
    {
        return Model\Services\ConfigurationService::create()->getSystemConfigurationByKey($key);
    }

    /**
     * Updates named configuration
     * Requires authentication as administrator.
     */
    public static function postSystemConfigurationByKey(string $key): void
    {
        Model\Services\ConfigurationService::create()->postSystemConfigurationByKey($key);
    }

    /**
     * Gets release notes
     * Requires authentication as user.
     */
    public static function getSystemReleasenotes(): Model\Updates\PackageVersionInfo
    {
        return Model\Services\SystemService::create()->getSystemReleasenotes();
    }

    public static function getSystemPing(): void
    {
        Model\Services\SystemService::create()->getSystemPing();
    }

    public static function postSystemPing(): void
    {
        Model\Services\SystemService::create()->postSystemPing();
    }

    /**
     * Gets wake on lan information
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\WakeOnLanInfo[]
     */
    public static function getSystemWakeonlaninfo(): array
    {
        return Model\Services\SystemService::create()->getSystemWakeonlaninfo();
    }

    /**
     * Gets information about the server
     * Requires authentication as user.
     */
    public static function getSystemInfo(): Model\SystemInfo
    {
        return Model\Services\SystemService::create()->getSystemInfo();
    }

    /**
     * Restarts the application, if needed
     * Requires authentication as administrator.
     */
    public static function postSystemRestart(): mixed
    {
        return Model\Services\SystemService::create()->postSystemRestart();
    }

    /**
     * Shuts down the application
     * Requires authentication as administrator.
     */
    public static function postSystemShutdown(): mixed
    {
        return Model\Services\SystemService::create()->postSystemShutdown();
    }

    /**
     * Gets information about the request endpoint
     * Requires authentication as user.
     */
    public static function getSystemEndpoint(): Model\Net\EndPointInfo
    {
        return Model\Services\SystemService::create()->getSystemEndpoint();
    }

    /**
     * Gets release notes
     * Requires authentication as user.
     *
     * @return \EmbyClient\Model\Updates\PackageVersionInfo[]
     */
    public static function getSystemReleasenotesVersions(): array
    {
        return Model\Services\SystemService::create()->getSystemReleasenotesVersions();
    }

    /**
     * Gets a list of available server log files
     * Requires authentication as administrator.
     */
    public static function getSystemLogsQuery(int $startIndex, ?int $limit = null): Model\QueryResult\LogFile
    {
        return Model\Services\SystemService::create()->getSystemLogsQuery($startIndex, $limit);
    }

    /**
     * Gets a log file
     * Requires authentication as administrator.
     */
    public static function getSystemLogsByName(string $name, bool $sanitize): mixed
    {
        return Model\Services\SystemService::create()->getSystemLogsByName($name, $sanitize);
    }

    /**
     * Gets public information about the server
     * No authentication required.
     */
    public static function getSystemInfoPublic(): Model\PublicSystemInfo
    {
        return Model\Services\SystemService::create()->getSystemInfoPublic();
    }

    /**
     * Gets a log file
     * Requires authentication as administrator.
     */
    public static function getSystemLogsByNameLines(string $name): Model\QueryResult\Strings
    {
        return Model\Services\SystemService::create()->getSystemLogsByNameLines($name);
    }

    /**
     * Gets a list of publicly visible users for display on a login screen.
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     *
     * @return \EmbyClient\Model\UserDto[]
     */
    public static function getUsersPublic(): array
    {
        return Model\Services\UserService::create()->getUsersPublic();
    }

    /**
     * Gets a list of users
     * Requires authentication as administrator.
     */
    public static function getUsersQuery(int $startIndex, string $nameStartsWithOrGreater, ?int $limit = null, ?bool $isDisabled = null, ?bool $isHidden = null): Model\QueryResult\UserDto
    {
        return Model\Services\UserService::create()->getUsersQuery($startIndex, $nameStartsWithOrGreater, $limit, $isDisabled, $isHidden);
    }

    /**
     * Gets a list of users
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public static function getUsersPrefixes(int $startIndex, string $nameStartsWithOrGreater, ?int $limit = null, ?bool $isDisabled = null, ?bool $isHidden = null): array
    {
        return Model\Services\UserService::create()->getUsersPrefixes($startIndex, $nameStartsWithOrGreater, $limit, $isDisabled, $isHidden);
    }

    /**
     * Gets a user by Id
     * Requires authentication as user.
     */
    public static function getUsersById(string $id): Model\UserDto
    {
        return Model\Services\UserService::create()->getUsersById($id);
    }

    /**
     * Updates a user
     * Requires authentication as user.
     */
    public static function postUsersById(string $id): void
    {
        Model\Services\UserService::create()->postUsersById($id);
    }

    /**
     * Deletes a user
     * Requires authentication as administrator.
     */
    public static function deleteUsersById(string $id): void
    {
        Model\Services\UserService::create()->deleteUsersById($id);
    }

    /**
     * Authenticates a user
     * Authenticate a user by nane and password. A 200 status code indicates success, while anything in the 400 or 500 range indicates failure
     * ---
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public static function postUsersAuthenticatebyname(string $xEmbyAuthorization): Model\Authentication\AuthenticationResult
    {
        return Model\Services\UserService::create()->postUsersAuthenticatebyname($xEmbyAuthorization);
    }

    /**
     * Creates a user
     * Requires authentication as administrator.
     */
    public static function postUsersNew(): Model\UserDto
    {
        return Model\Services\UserService::create()->postUsersNew();
    }

    /**
     * Initiates the forgot password process for a local user
     * No authentication required.
     */
    public static function postUsersForgotpassword(): Model\Users\ForgotPasswordResult
    {
        return Model\Services\UserService::create()->postUsersForgotpassword();
    }

    /**
     * Deletes a user
     * Requires authentication as administrator.
     */
    public static function postUsersByIdDelete(string $id): void
    {
        Model\Services\UserService::create()->postUsersByIdDelete($id);
    }

    /**
     * Authenticates a user
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/User-Authentication API Documentation: Authentication
     */
    public static function postUsersByIdAuthenticate(string $id): Model\Authentication\AuthenticationResult
    {
        return Model\Services\UserService::create()->postUsersByIdAuthenticate($id);
    }

    /**
     * Updates a user's password
     * Requires authentication as user.
     */
    public static function postUsersByIdPassword(string $id): void
    {
        Model\Services\UserService::create()->postUsersByIdPassword($id);
    }

    /**
     * Updates a user's easy password
     * Requires authentication as user.
     */
    public static function postUsersByIdEasypassword(string $id): void
    {
        Model\Services\UserService::create()->postUsersByIdEasypassword($id);
    }

    /**
     * Redeems a forgot password pin
     * No authentication required.
     */
    public static function postUsersForgotpasswordPin(): Model\Users\PinRedeemResult
    {
        return Model\Services\UserService::create()->postUsersForgotpasswordPin();
    }

    /**
     * Updates a user configuration
     * Requires authentication as user.
     */
    public static function postUsersByIdConfiguration(string $id): void
    {
        Model\Services\UserService::create()->postUsersByIdConfiguration($id);
    }

    /**
     * Updates a user policy
     * Requires authentication as administrator.
     */
    public static function postUsersByIdPolicy(string $id): void
    {
        Model\Services\UserService::create()->postUsersByIdPolicy($id);
    }

    /**
     * Clears audio or subtitle track selections for a user
     * No authentication required.
     */
    public static function deleteUsersByIdTrackselectionsByTracktype(string $id, string $trackType): void
    {
        Model\Services\UserService::create()->deleteUsersByIdTrackselectionsByTracktype($id, $trackType);
    }

    /**
     * Clears audio or subtitle track selections for a user
     * No authentication required.
     */
    public static function postUsersByIdTrackselectionsByTracktypeDelete(string $id, string $trackType): void
    {
        Model\Services\UserService::create()->postUsersByIdTrackselectionsByTracktypeDelete($id, $trackType);
    }

    /**
     * Merges videos into a single record
     * Requires authentication as administrator.
     */
    public static function postVideosMergeversions(string $ids): void
    {
        Model\Services\VideosService::create()->postVideosMergeversions($ids);
    }

    /**
     * Removes alternate video sources.
     * Requires authentication as administrator.
     */
    public static function deleteVideosByIdAlternatesources(string $id): void
    {
        Model\Services\VideosService::create()->deleteVideosByIdAlternatesources($id);
    }

    /**
     * Removes alternate video sources.
     * Requires authentication as administrator.
     */
    public static function postVideosByIdAlternatesourcesDelete(string $id): void
    {
        Model\Services\VideosService::create()->postVideosByIdAlternatesourcesDelete($id);
    }

    public static function deleteVideosActiveencodings(string $deviceId, string $playSessionId): mixed
    {
        return Model\Services\HlsSegmentService::create()->deleteVideosActiveencodings($deviceId, $playSessionId);
    }

    public static function postVideosActiveencodingsDelete(string $deviceId, string $playSessionId): mixed
    {
        return Model\Services\HlsSegmentService::create()->postVideosActiveencodingsDelete($deviceId, $playSessionId);
    }

    public static function getWebConfigurationpage(): mixed
    {
        return Model\Services\DashboardService::create()->getWebConfigurationpage();
    }

    /**
     * @return \EmbyClient\Model\Emby\Web\Api\ConfigurationPageInfo[]
     */
    public static function getWebConfigurationpages(): array
    {
        return Model\Services\DashboardService::create()->getWebConfigurationpages();
    }

    public static function getWebStrings(): mixed
    {
        return Model\Services\DashboardService::create()->getWebStrings();
    }

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public static function getAudioByIdUniversalByContainer(string $id, string $deviceId, string $container, ?int $startTimeTicks = null): mixed
    {
        return Model\Services\UniversalAudioService::create()->getAudioByIdUniversalByContainer($id, $deviceId, $container, $startTimeTicks);
    }

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public static function getAudioByIdUniversal(string $id, string $deviceId, ?int $startTimeTicks = null): mixed
    {
        return Model\Services\UniversalAudioService::create()->getAudioByIdUniversal($id, $deviceId, $startTimeTicks);
    }

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public static function getAudioByIdStreamByContainer(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\AudioService::create()->getAudioByIdStreamByContainer($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an audio stream
     * Requires authentication as user.
     */
    public static function getAudioByIdStream(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\AudioService::create()->getAudioByIdStream($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an audio stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public static function getAudioByIdMasterM3u8(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\DynamicHlsService::create()->getAudioByIdMasterM3u8($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an audio stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public static function getAudioByIdMainM3u8(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\DynamicHlsService::create()->getAudioByIdMainM3u8($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets a video stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public static function getVideosByIdMasterM3u8(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\DynamicHlsService::create()->getVideosByIdMasterM3u8($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets a video stream using HTTP live streaming.
     * Requires authentication as user.
     */
    public static function getVideosByIdMainM3u8(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\DynamicHlsService::create()->getVideosByIdMainM3u8($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets an HLS subtitle playlist.
     * Requires authentication as user.
     */
    public static function getVideosByIdSubtitlesM3u8(string $id, int $subtitleSegmentLength, string $manifestSubtitles): mixed
    {
        return Model\Services\DynamicHlsService::create()->getVideosByIdSubtitlesM3u8($id, $subtitleSegmentLength, $manifestSubtitles);
    }

    /**
     * Gets an HLS subtitle playlist.
     * Requires authentication as user.
     */
    public static function getVideosByIdLiveSubtitlesM3u8(string $id, int $subtitleSegmentLength, string $manifestSubtitles): mixed
    {
        return Model\Services\DynamicHlsService::create()->getVideosByIdLiveSubtitlesM3u8($id, $subtitleSegmentLength, $manifestSubtitles);
    }

    public static function getAudioByIdHls1ByPlaylistidBySegmentidBySegmentcontainer(string $segmentContainer, string $segmentId, string $id, string $playlistId): mixed
    {
        return Model\Services\DynamicHlsService::create()->getAudioByIdHls1ByPlaylistidBySegmentidBySegmentcontainer($segmentContainer, $segmentId, $id, $playlistId);
    }

    public static function getVideosByIdHls1ByPlaylistidBySegmentidBySegmentcontainer(string $segmentContainer, string $segmentId, string $id, string $playlistId): mixed
    {
        return Model\Services\DynamicHlsService::create()->getVideosByIdHls1ByPlaylistidBySegmentidBySegmentcontainer($segmentContainer, $segmentId, $id, $playlistId);
    }

    /**
     * Gets dlna server info
     * No authentication required.
     */
    public static function getDlnaByUuidDescriptionXml(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidDescriptionXml($uuId);
    }

    /**
     * Gets dlna server info
     * No authentication required.
     */
    public static function getDlnaByUuidDescription(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidDescription($uuId);
    }

    /**
     * Gets a server icon
     * No authentication required.
     */
    public static function getDlnaIconsByFilename(string $uuId, string $filename): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaIconsByFilename($uuId, $filename);
    }

    /**
     * Gets dlna content directory xml
     * No authentication required.
     */
    public static function getDlnaByUuidContentdirectoryContentdirectoryXml(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidContentdirectoryContentdirectoryXml($uuId);
    }

    /**
     * Gets dlna content directory xml
     * No authentication required.
     */
    public static function getDlnaByUuidContentdirectoryContentdirectory(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidContentdirectoryContentdirectory($uuId);
    }

    /**
     * Gets dlna connection manager xml
     * No authentication required.
     */
    public static function getDlnaByUuidConnectionmanagerConnectionmanagerXml(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidConnectionmanagerConnectionmanagerXml($uuId);
    }

    /**
     * Gets dlna connection manager xml
     * No authentication required.
     */
    public static function getDlnaByUuidConnectionmanagerConnectionmanager(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidConnectionmanagerConnectionmanager($uuId);
    }

    /**
     * Processes a control request
     * No authentication required.
     */
    public static function postDlnaByUuidContentdirectoryControl(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->postDlnaByUuidContentdirectoryControl($uuId);
    }

    /**
     * Processes a control request
     * No authentication required.
     */
    public static function postDlnaByUuidConnectionmanagerControl(string $uuId): mixed
    {
        return Model\Services\DlnaServerService::create()->postDlnaByUuidConnectionmanagerControl($uuId);
    }

    /**
     * Gets a server icon
     * No authentication required.
     */
    public static function getDlnaByUuidIconsByFilename(string $uuId, string $filename): mixed
    {
        return Model\Services\DlnaServerService::create()->getDlnaByUuidIconsByFilename($uuId, $filename);
    }

    /**
     * Gets external id infos for an item
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\ExternalIdInfo[]
     */
    public static function getItemsByIdExternalidinfos(string $id): array
    {
        return Model\Services\ItemLookupService::create()->getItemsByIdExternalidinfos($id);
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchTrailer(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchTrailer();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchBook(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchBook();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchMovie(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchMovie();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchSeries(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchSeries();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchGame(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchGame();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchBoxset(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchBoxset();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchMusicvideo(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchMusicvideo();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchPerson(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchPerson();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchMusicalbum(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchMusicalbum();
    }

    /**
     * @return \EmbyClient\Model\RemoteSearchResult[]
     */
    public static function postItemsRemotesearchMusicartist(): array
    {
        return Model\Services\ItemLookupService::create()->postItemsRemotesearchMusicartist();
    }

    /**
     * Gets a remote image
     * Requires authentication as administrator.
     */
    public static function getItemsRemotesearchImage(string $imageUrl, string $providerName): mixed
    {
        return Model\Services\ItemLookupService::create()->getItemsRemotesearchImage($imageUrl, $providerName);
    }

    /**
     * Applies search criteria to an item and refreshes metadata
     * Requires authentication as administrator.
     */
    public static function postItemsRemotesearchApplyById(string $id, bool $replaceAllImages): void
    {
        Model\Services\ItemLookupService::create()->postItemsRemotesearchApplyById($id, $replaceAllImages);
    }

    /**
     * Refreshes metadata for an item
     * Requires authentication as user.
     */
    public static function postItemsByIdRefresh(bool $recursive, string $id, Model\Providers\MetadataRefreshMode $metadataRefreshMode, Model\Providers\MetadataRefreshMode $imageRefreshMode, bool $replaceAllMetadata, bool $replaceAllImages): void
    {
        Model\Services\ItemRefreshService::create()->postItemsByIdRefresh($recursive, $id, $metadataRefreshMode, $imageRefreshMode, $replaceAllMetadata, $replaceAllImages);
    }

    public static function getItemsByIdThumbnailset(int $width, string $id): Model\RokuMetadata\Api\ThumbnailSetInfo
    {
        return Model\Services\BifService::create()->getItemsByIdThumbnailset($width, $id);
    }

    public static function getVideosByIdIndexBif(int $width, string $id): mixed
    {
        return Model\Services\BifService::create()->getVideosByIdIndexBif($width, $id);
    }

    /**
     * Gets a live tv program
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getLivetvProgramsById(string $id): Model\BaseItemDto
    {
        return Model\Services\UserLibraryService::create()->getLivetvProgramsById($id);
    }

    /**
     * Gets additional parts for a video.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getVideosByIdAdditionalparts(string $userId, string $id): Model\QueryResult\BaseItemDto
    {
        return Model\Services\UserLibraryService::create()->getVideosByIdAdditionalparts($userId, $id);
    }

    /**
     * Gets latest media
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Latest-Items API Documentation: Latest Items
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public static function getUsersByUseridItemsLatest(string $userId, int $limit, string $parentId, string $fields, string $includeItemTypes, string $mediaTypes, bool $groupItems, string $enableImageTypes, ?bool $enableUserData = null, ?int $imageTypeLimit = null, ?bool $enableImages = null, ?bool $isPlayed = null, ?bool $isFolder = null): array
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsLatest($userId, $limit, $parentId, $fields, $includeItemTypes, $mediaTypes, $groupItems, $enableImageTypes, $enableUserData, $imageTypeLimit, $enableImages, $isPlayed, $isFolder);
    }

    /**
     * Gets an item from a user's library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getUsersByUseridItemsById(string $userId, string $id): Model\BaseItemDto
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsById($userId, $id);
    }

    /**
     * Gets the root folder from a user's library
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getUsersByUseridItemsRoot(string $userId): Model\BaseItemDto
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsRoot($userId);
    }

    /**
     * Marks an item as a favorite
     * Requires authentication as user.
     */
    public static function postUsersByUseridFavoriteitemsById(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->postUsersByUseridFavoriteitemsById($userId, $id);
    }

    /**
     * Unmarks an item as a favorite
     * Requires authentication as user.
     */
    public static function deleteUsersByUseridFavoriteitemsById(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->deleteUsersByUseridFavoriteitemsById($userId, $id);
    }

    /**
     * Gets special features for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public static function getUsersByUseridItemsByIdSpecialfeatures(string $userId, string $id): array
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsByIdSpecialfeatures($userId, $id);
    }

    /**
     * Gets local trailers for an item
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public static function getUsersByUseridItemsByIdLocaltrailers(string $userId, string $id): array
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsByIdLocaltrailers($userId, $id);
    }

    /**
     * Gets intros to play before the main media item plays
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getUsersByUseridItemsByIdIntros(string $userId, string $id): Model\QueryResult\BaseItemDto
    {
        return Model\Services\UserLibraryService::create()->getUsersByUseridItemsByIdIntros($userId, $id);
    }

    /**
     * Unmarks an item as a favorite
     * Requires authentication as user.
     */
    public static function postUsersByUseridFavoriteitemsByIdDelete(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->postUsersByUseridFavoriteitemsByIdDelete($userId, $id);
    }

    /**
     * Updates a user's rating for an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridItemsByIdRating(string $userId, string $id, bool $likes): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->postUsersByUseridItemsByIdRating($userId, $id, $likes);
    }

    /**
     * Deletes a user's saved personal rating for an item
     * Requires authentication as user.
     */
    public static function deleteUsersByUseridItemsByIdRating(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->deleteUsersByUseridItemsByIdRating($userId, $id);
    }

    /**
     * Updates a user's hide from resume for an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridItemsByIdHidefromresume(string $userId, string $id, bool $hide): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->postUsersByUseridItemsByIdHidefromresume($userId, $id, $hide);
    }

    /**
     * Deletes a user's saved personal rating for an item
     * Requires authentication as user.
     */
    public static function postUsersByUseridItemsByIdRatingDelete(string $userId, string $id): Model\UserItemDataDto
    {
        return Model\Services\UserLibraryService::create()->postUsersByUseridItemsByIdRatingDelete($userId, $id);
    }

    /**
     * Gets activity log entries
     * Requires authentication as administrator.
     */
    public static function getSystemActivitylogEntries(string $minDate, ?int $limit = null, ?int $startIndex = null): Model\QueryResult\ActivityLogEntry
    {
        return Model\Services\ActivityLogService::create()->getSystemActivitylogEntries($minDate, $limit, $startIndex);
    }

    /**
     * Gets items based on a query.
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public static function getUsersByUseridSuggestions(string $userId): Model\QueryResult\BaseItemDto
    {
        return Model\Services\SuggestionsService::create()->getUsersByUseridSuggestions($userId);
    }

    /**
     * @see https://github.com/MediaBrowser/Emby/wiki/Browsing-the-Library API Documentation: Browsing the Library
     */
    public static function getUsersByUseridViews(string $userId, ?bool $includeExternalContent = null): Model\QueryResult\BaseItemDto
    {
        return Model\Services\UserViewsService::create()->getUsersByUseridViews($userId, $includeExternalContent);
    }

    /**
     * Gets a video stream
     * Requires authentication as user.
     */
    public static function getVideosByIdStreamByContainer(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\VideoService::create()->getVideosByIdStreamByContainer($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    /**
     * Gets a video stream
     * Requires authentication as user.
     */
    public static function getVideosByIdStream(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\VideoService::create()->getVideosByIdStream($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    public static function getVideosByIdLiveM3u8(string $deviceProfileId, bool $static, Model\Dlna\SubtitleDeliveryMethod $subtitleMethod, bool $copyTimestamps, string $id, string $level, string $profile, string $videoCodec, string $deviceId, bool $enableAutoStreamCopy, string $audioCodec, string $container, ?int $subtitleStreamIndex = null, ?int $videoBitRate = null, ?int $maxHeight = null, ?int $maxWidth = null, ?int $height = null, ?int $maxAudioChannels = null, ?int $maxVideoBitDepth = null, ?int $audioStreamIndex = null, ?int $audioSampleRate = null, ?int $audioBitRate = null, ?int $startTimeTicks = null, ?int $maxRefFrames = null, ?int $width = null, ?float $framerate = null, ?int $audioChannels = null, ?int $videoStreamIndex = null, ?float $maxFramerate = null): mixed
    {
        return Model\Services\VideoHlsService::create()->getVideosByIdLiveM3u8($deviceProfileId, $static, $subtitleMethod, $copyTimestamps, $id, $level, $profile, $videoCodec, $deviceId, $enableAutoStreamCopy, $audioCodec, $container, $subtitleStreamIndex, $videoBitRate, $maxHeight, $maxWidth, $height, $maxAudioChannels, $maxVideoBitDepth, $audioStreamIndex, $audioSampleRate, $audioBitRate, $startTimeTicks, $maxRefFrames, $width, $framerate, $audioChannels, $videoStreamIndex, $maxFramerate);
    }

    public static function getVideosByIdHlsByPlaylistidBySegmentidBySegmentcontainer(string $segmentContainer, string $segmentId, string $id, string $playlistId): mixed
    {
        return Model\Services\VideoHlsService::create()->getVideosByIdHlsByPlaylistidBySegmentidBySegmentcontainer($segmentContainer, $segmentId, $id, $playlistId);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public static function deleteItemsByIdSubtitlesByIndex(string $id, string $mediaSourceId, int $index): mixed
    {
        return Model\Services\SubtitleService::create()->deleteItemsByIdSubtitlesByIndex($id, $mediaSourceId, $index);
    }

    public static function getProvidersSubtitlesSubtitlesById(string $id): void
    {
        Model\Services\SubtitleService::create()->getProvidersSubtitlesSubtitlesById($id);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public static function deleteVideosByIdSubtitlesByIndex(string $id, string $mediaSourceId, int $index): mixed
    {
        return Model\Services\SubtitleService::create()->deleteVideosByIdSubtitlesByIndex($id, $mediaSourceId, $index);
    }

    /**
     * @return \EmbyClient\Model\RemoteSubtitleInfo[]
     */
    public static function getItemsByIdRemotesearchSubtitlesByLanguage(string $id, string $mediaSourceId, string $language, ?bool $isForced = null, ?bool $isPerfectMatch = null): array
    {
        return Model\Services\SubtitleService::create()->getItemsByIdRemotesearchSubtitlesByLanguage($id, $mediaSourceId, $language, $isForced, $isPerfectMatch);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public static function postItemsByIdSubtitlesByIndexDelete(string $id, string $mediaSourceId, int $index): mixed
    {
        return Model\Services\SubtitleService::create()->postItemsByIdSubtitlesByIndexDelete($id, $mediaSourceId, $index);
    }

    public static function postItemsByIdRemotesearchSubtitlesBySubtitleid(string $id, string $mediaSourceId, string $subtitleId): Model\Subtitles\SubtitleDownloadResult
    {
        return Model\Services\SubtitleService::create()->postItemsByIdRemotesearchSubtitlesBySubtitleid($id, $mediaSourceId, $subtitleId);
    }

    /**
     * Deletes an external subtitle file
     * Requires authentication as user.
     */
    public static function postVideosByIdSubtitlesByIndexDelete(string $id, string $mediaSourceId, int $index): mixed
    {
        return Model\Services\SubtitleService::create()->postVideosByIdSubtitlesByIndexDelete($id, $mediaSourceId, $index);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public static function getItemsByIdByMediasourceidSubtitlesByIndexStreamByFormat(string $id, string $mediaSourceId, int $index, string $format, int $startPositionTicks, bool $copyTimestamps, ?int $endPositionTicks = null): mixed
    {
        return Model\Services\SubtitleService::create()->getItemsByIdByMediasourceidSubtitlesByIndexStreamByFormat($id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public static function getVideosByIdByMediasourceidSubtitlesByIndexStreamByFormat(string $id, string $mediaSourceId, int $index, string $format, int $startPositionTicks, bool $copyTimestamps, ?int $endPositionTicks = null): mixed
    {
        return Model\Services\SubtitleService::create()->getVideosByIdByMediasourceidSubtitlesByIndexStreamByFormat($id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public static function getItemsByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat(string $id, string $mediaSourceId, int $index, string $format, int $startPositionTicks, bool $copyTimestamps, ?int $endPositionTicks = null): mixed
    {
        return Model\Services\SubtitleService::create()->getItemsByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat($id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }

    /**
     * Gets subtitles in a specified format.
     * No authentication required.
     */
    public static function getVideosByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat(string $id, string $mediaSourceId, int $index, string $format, int $startPositionTicks, bool $copyTimestamps, ?int $endPositionTicks = null): mixed
    {
        return Model\Services\SubtitleService::create()->getVideosByIdByMediasourceidSubtitlesByIndexByStartpositionticksStreamByFormat($id, $mediaSourceId, $index, $format, $startPositionTicks, $copyTimestamps, $endPositionTicks);
    }
}

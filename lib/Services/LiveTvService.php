<?php

declare(strict_types=1);

namespace EmbyClient\Model\Services;

use EmbyClient\ApiService;

class LiveTvService extends ApiService
{
    protected static array $endpoints        = [
        'getLivetvChanneltags'                              => [
            '/LiveTv/ChannelTags',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvFolder'                                   => [
            '/LiveTv/Folder',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'getLivetvChannelmappings'                          => [
            '/LiveTv/ChannelMappings',
            'GET',
            'mixed',
            false,
        ],
        'postLivetvChannelmappings'                         => [
            '/LiveTv/ChannelMappings',
            'POST',
            'mixed',
            false,
        ],
        'putLivetvChannelmappings'                          => [
            '/LiveTv/ChannelMappings',
            'PUT',
            'mixed',
            false,
        ],
        'deleteLivetvChannelmappings'                       => [
            '/LiveTv/ChannelMappings',
            'DELETE',
            'mixed',
            false,
        ],
        'getLivetvChannelmappingoptions'                    => [
            '/LiveTv/ChannelMappingOptions',
            'GET',
            'mixed',
            false,
        ],
        'postLivetvChannelmappingoptions'                   => [
            '/LiveTv/ChannelMappingOptions',
            'POST',
            'mixed',
            false,
        ],
        'putLivetvChannelmappingoptions'                    => [
            '/LiveTv/ChannelMappingOptions',
            'PUT',
            'mixed',
            false,
        ],
        'deleteLivetvChannelmappingoptions'                 => [
            '/LiveTv/ChannelMappingOptions',
            'DELETE',
            'mixed',
            false,
        ],
        'getLivetvListingproviders'                         => [
            '/LiveTv/ListingProviders',
            'GET',
            'array',
            '\\EmbyClient\\Model\\LiveTv\\ListingsProviderInfo',
        ],
        'postLivetvListingproviders'                        => [
            '/LiveTv/ListingProviders',
            'POST',
            '\\EmbyClient\\Model\\LiveTv\\ListingsProviderInfo',
            false,
        ],
        'deleteLivetvListingproviders'                      => [
            '/LiveTv/ListingProviders',
            'DELETE',
            'void',
            false,
        ],
        'getLivetvTunerhosts'                               => [
            '/LiveTv/TunerHosts',
            'GET',
            'array',
            '\\EmbyClient\\Model\\LiveTv\\TunerHostInfo',
        ],
        'postLivetvTunerhosts'                              => [
            '/LiveTv/TunerHosts',
            'POST',
            '\\EmbyClient\\Model\\LiveTv\\TunerHostInfo',
            false,
        ],
        'deleteLivetvTunerhosts'                            => [
            '/LiveTv/TunerHosts',
            'DELETE',
            'void',
            false,
        ],
        'getLivetvInfo'                                     => [
            '/LiveTv/Info',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\LiveTvInfo',
            false,
        ],
        'getLivetvEPG'                                      => [
            '/LiveTv/EPG',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\LiveTv\\Api\\EpgRow',
            false,
        ],
        'getLivetvChannels'                                 => [
            '/LiveTv/Channels',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvPrograms'                                 => [
            '/LiveTv/Programs',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'postLivetvPrograms'                                => [
            '/LiveTv/Programs',
            'POST',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvRecordings'                               => [
            '/LiveTv/Recordings',
            'GET',
            'mixed',
            false,
        ],
        'getLivetvTimers'                                   => [
            '/LiveTv/Timers',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\LiveTv\\TimerInfoDto',
            false,
        ],
        'postLivetvTimers'                                  => [
            '/LiveTv/Timers',
            'POST',
            'void',
            false,
        ],
        'getLivetvSeriestimers'                             => [
            '/LiveTv/SeriesTimers',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\LiveTv\\SeriesTimerInfoDto',
            false,
        ],
        'postLivetvSeriestimers'                            => [
            '/LiveTv/SeriesTimers',
            'POST',
            'void',
            false,
        ],
        'getLivetvGuideinfo'                                => [
            '/LiveTv/GuideInfo',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\GuideInfo',
            false,
        ],
        'getLivetvTunerhostsTypes'                          => [
            '/LiveTv/TunerHosts/Types',
            'GET',
            'array',
            '\\EmbyClient\\Model\\NameIdPair',
        ],
        'getLivetvManageChannels'                           => [
            '/LiveTv/Manage/Channels',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\Emby\\LiveTV\\ChannelManagementInfo',
            false,
        ],
        'getLivetvChanneltagsPrefixes'                      => [
            '/LiveTv/ChannelTags/Prefixes',
            'GET',
            'array',
            '\\EmbyClient\\Model\\LiveTv\\Api\\TagItem',
        ],
        'getLivetvRecordingsFolders'                        => [
            '/LiveTv/Recordings/Folders',
            'GET',
            'array',
            '\\EmbyClient\\Model\\BaseItemDto',
        ],
        'getLivetvTunersDiscvover'                          => [
            '/LiveTv/Tuners/Discvover',
            'GET',
            'array',
            '\\EmbyClient\\Model\\LiveTv\\TunerHostInfo',
        ],
        'getLivetvListingprovidersDefault'                  => [
            '/LiveTv/ListingProviders/Default',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\ListingsProviderInfo',
            false,
        ],
        'postLivetvListingprovidersDelete'                  => [
            '/LiveTv/ListingProviders/Delete',
            'POST',
            'void',
            false,
        ],
        'postLivetvTunerhostsDelete'                        => [
            '/LiveTv/TunerHosts/Delete',
            'POST',
            'void',
            false,
        ],
        'getLivetvListingprovidersLineups'                  => [
            '/LiveTv/ListingProviders/Lineups',
            'GET',
            'array',
            '\\EmbyClient\\Model\\NameIdPair',
        ],
        'getLivetvChannelsById'                             => [
            '/LiveTv/Channels/{Id}',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'getLivetvProgramsRecommended'                      => [
            '/LiveTv/Programs/Recommended',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvRecordingsSeries'                         => [
            '/LiveTv/Recordings/Series',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvRecordingsById'                           => [
            '/LiveTv/Recordings/{Id}',
            'GET',
            '\\EmbyClient\\Model\\BaseItemDto',
            false,
        ],
        'deleteLivetvRecordingsById'                        => [
            '/LiveTv/Recordings/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'getLivetvTimersById'                               => [
            '/LiveTv/Timers/{Id}',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\TimerInfoDto',
            false,
        ],
        'postLivetvTimersById'                              => [
            '/LiveTv/Timers/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteLivetvTimersById'                            => [
            '/LiveTv/Timers/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'getLivetvSeriestimersById'                         => [
            '/LiveTv/SeriesTimers/{Id}',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\TimerInfoDto',
            false,
        ],
        'postLivetvSeriestimersById'                        => [
            '/LiveTv/SeriesTimers/{Id}',
            'POST',
            'void',
            false,
        ],
        'deleteLivetvSeriestimersById'                      => [
            '/LiveTv/SeriesTimers/{Id}',
            'DELETE',
            'void',
            false,
        ],
        'getLivetvTimersDefaults'                           => [
            '/LiveTv/Timers/Defaults',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\SeriesTimerInfoDto',
            false,
        ],
        'getLivetvRecordingsGroups'                         => [
            '/LiveTv/Recordings/Groups',
            'GET',
            '\\EmbyClient\\Model\\QueryResult\\BaseItemDto',
            false,
        ],
        'getLivetvListingprovidersAvailable'                => [
            '/LiveTv/ListingProviders/Available',
            'GET',
            'array',
            '\\EmbyClient\\Model\\LiveTv\\Api\\ListingProviderTypeInfo',
        ],
        'getLivetvLiverecordingsByIdStream'                 => [
            '/LiveTv/LiveRecordings/{Id}/stream',
            'GET',
            'mixed',
            false,
        ],
        'getLivetvLivestreamfilesByIdStreamByContainer'     => [
            '/LiveTv/LiveStreamFiles/{Id}/stream.{Container}',
            'GET',
            'mixed',
            false,
        ],
        'getLivetvListingprovidersSchedulesdirectCountries' => [
            '/LiveTv/ListingProviders/SchedulesDirect/Countries',
            'GET',
            'mixed',
            false,
        ],
        'getLivetvTunerhostsDefaultByType'                  => [
            '/LiveTv/TunerHosts/Default/{Type}',
            'GET',
            '\\EmbyClient\\Model\\LiveTv\\TunerHostInfo',
            false,
        ],
        'postLivetvRecordingsByIdDelete'                    => [
            '/LiveTv/Recordings/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postLivetvTimersByIdDelete'                        => [
            '/LiveTv/Timers/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postLivetvSeriestimersByIdDelete'                  => [
            '/LiveTv/SeriesTimers/{Id}/Delete',
            'POST',
            'void',
            false,
        ],
        'postLivetvTunersByIdReset'                         => [
            '/LiveTv/Tuners/{Id}/Reset',
            'POST',
            'void',
            false,
        ],
        'postLivetvManageChannelsByIdDisabled'              => [
            '/LiveTv/Manage/Channels/{Id}/Disabled',
            'POST',
            '\\EmbyClient\\Model\\QueryResult\\Emby\\LiveTV\\ChannelManagementInfo',
            false,
        ],
        'postLivetvManageChannelsByIdSortindex'             => [
            '/LiveTv/Manage/Channels/{Id}/SortIndex',
            'POST',
            '\\EmbyClient\\Model\\QueryResult\\Emby\\LiveTV\\ChannelManagementInfo',
            false,
        ],
    ];
    protected static array $parameters       = [
        'getLivetvChanneltags'                              => [
            'artistType',
            'tags',
            'studios',
            'personTypes',
            'personIds',
            'person',
            'enableImageTypes',
            'years',
            'officialRatings',
            'artists',
            'genres',
            'sortBy',
            'imageTypes',
            'mediaTypes',
            'maxOfficialRating',
            'filters',
            'studioIds',
            'artistIds',
            'includeItemTypes',
            'minOfficialRating',
            'nameStartsWith',
            'albumArtistStartsWithOrGreater',
            'artistStartsWithOrGreater',
            'nameStartsWithOrGreater',
            'seriesStatus',
            'groupItemsIntoCollections',
            'userId',
            'albums',
            'path',
            'subtitleCodecs',
            'videoCodecs',
            'audioCodecs',
            'containers',
            'videoTypes',
            'ids',
            'anyProviderIdEquals',
            'nameLessThan',
            'excludeItemTypes',
            'excludeItemIds',
            'adjacentTo',
            'locationTypes',
            'excludeLocationTypes',
            'fields',
            'minDateLastSaved',
            'minDateLastSavedForUser',
            'maxPremiereDate',
            'minPremiereDate',
            'recursive',
            'parentId',
            'sortOrder',
            'searchTerm',
            'hasThemeSong',
            'hasTrailer',
            'hasSubtitles',
            'maxPlayers',
            'hasTvdbId',
            'startIndex',
            'hasParentalRating',
            'hasOverview',
            'isKids',
            'enableUserData',
            'imageTypeLimit',
            'enableImages',
            'hasImdbId',
            'hasTmdbId',
            'limit',
            'isNews',
            'isFavorite',
            'minIndexNumber',
            'isHD',
            'isPlaceHolder',
            'parentIndexNumber',
            'isPlayed',
            'minPlayers',
            'isSports',
            'isLocked',
            'isMovie',
            'hasOfficialRating',
            'airedDuringSeason',
            'is3D',
            'minCriticRating',
            'hasSpecialFeature',
            'minCommunityRating',
            'hasThemeVideo',
            'isUnaired',
            'isSeries',
            'isMissing',
        ],
        'getLivetvFolder'                                   => [],
        'getLivetvChannelmappings'                          => [
            'providerId',
        ],
        'postLivetvChannelmappings'                         => [
            'providerId',
        ],
        'putLivetvChannelmappings'                          => [
            'providerId',
        ],
        'deleteLivetvChannelmappings'                       => [
            'providerId',
        ],
        'getLivetvChannelmappingoptions'                    => [
            'providerId',
        ],
        'postLivetvChannelmappingoptions'                   => [
            'providerId',
        ],
        'putLivetvChannelmappingoptions'                    => [
            'providerId',
        ],
        'deleteLivetvChannelmappingoptions'                 => [
            'providerId',
        ],
        'getLivetvListingproviders'                         => [
            'channelId',
        ],
        'postLivetvListingproviders'                        => [],
        'deleteLivetvListingproviders'                      => [
            'id',
        ],
        'getLivetvTunerhosts'                               => [],
        'postLivetvTunerhosts'                              => [],
        'deleteLivetvTunerhosts'                            => [
            'id',
        ],
        'getLivetvInfo'                                     => [],
        'getLivetvEPG'                                      => [
            'type',
            'userId',
            'addCurrentProgram',
            'fields',
            'enableImageTypes',
            'enableFavoriteSorting',
            'channelIds',
            'minEndDate',
            'maxEndDate',
            'maxStartDate',
            'minStartDate',
            'genreIds',
            'imageTypeLimit',
            'enableImages',
            'isMovie',
            'isLiked',
            'isFavorite',
            'limit',
            'isKids',
            'isNews',
            'isSeries',
            'enableUserData',
            'isDisliked',
            'isSports',
            'startIndex',
        ],
        'getLivetvChannels'                                 => [
            'type',
            'officialRatings',
            'personTypes',
            'personIds',
            'person',
            'enableImageTypes',
            'years',
            'tags',
            'genres',
            'studioIds',
            'sortBy',
            'imageTypes',
            'mediaTypes',
            'filters',
            'anyProviderIdEquals',
            'includeItemTypes',
            'excludeItemTypes',
            'studios',
            'artists',
            'parentId',
            'userId',
            'nameStartsWith',
            'albumArtistStartsWithOrGreater',
            'artistStartsWithOrGreater',
            'nameStartsWithOrGreater',
            'seriesStatus',
            'groupItemsIntoCollections',
            'minOfficialRating',
            'path',
            'artistIds',
            'subtitleCodecs',
            'videoCodecs',
            'audioCodecs',
            'containers',
            'videoTypes',
            'ids',
            'albums',
            'fields',
            'nameLessThan',
            'sortOrder',
            'maxPremiereDate',
            'addCurrentProgram',
            'artistType',
            'maxOfficialRating',
            'adjacentTo',
            'locationTypes',
            'excludeLocationTypes',
            'searchTerm',
            'minPremiereDate',
            'minDateLastSaved',
            'minDateLastSavedForUser',
            'enableFavoriteSorting',
            'excludeItemIds',
            'recursive',
            'isPlaceHolder',
            'hasThemeVideo',
            'hasSpecialFeature',
            'minPlayers',
            'parentIndexNumber',
            'isSeries',
            'enableImages',
            'isKids',
            'isNews',
            'isSports',
            'isPlayed',
            'hasOverview',
            'hasThemeSong',
            'enableUserData',
            'startIndex',
            'imageTypeLimit',
            'hasImdbId',
            'airedDuringSeason',
            'maxPlayers',
            'isDisliked',
            'minIndexNumber',
            'isMovie',
            'hasTrailer',
            'isUnaired',
            'hasSubtitles',
            'isMissing',
            'isLocked',
            'isLiked',
            'hasOfficialRating',
            'hasTvdbId',
            'is3D',
            'isHD',
            'limit',
            'hasParentalRating',
            'minCriticRating',
            'hasTmdbId',
            'isFavorite',
            'minCommunityRating',
        ],
        'getLivetvPrograms'                                 => [
            'channelIds',
            'userId',
            'enableImageTypes',
            'genreIds',
            'sortOrder',
            'sortBy',
            'fields',
            'maxEndDate',
            'minEndDate',
            'maxStartDate',
            'minStartDate',
            'isSports',
            'enableUserData',
            'hasAired',
            'imageTypeLimit',
            'enableImages',
            'limit',
            'startIndex',
            'isKids',
            'isNews',
            'isSeries',
            'isMovie',
        ],
        'postLivetvPrograms'                                => [
            'channelIds',
            'userId',
            'enableImageTypes',
            'genreIds',
            'sortOrder',
            'sortBy',
            'fields',
            'maxEndDate',
            'minEndDate',
            'maxStartDate',
            'minStartDate',
            'isSports',
            'enableUserData',
            'hasAired',
            'imageTypeLimit',
            'enableImages',
            'limit',
            'startIndex',
            'isKids',
            'isNews',
            'isSeries',
            'isMovie',
        ],
        'getLivetvRecordings'                               => [
            'channelId',
            'officialRatings',
            'personTypes',
            'personIds',
            'person',
            'enableImageTypes',
            'years',
            'tags',
            'genres',
            'studioIds',
            'sortBy',
            'imageTypes',
            'mediaTypes',
            'status',
            'filters',
            'anyProviderIdEquals',
            'includeItemTypes',
            'studios',
            'artists',
            'fields',
            'userId',
            'nameStartsWith',
            'albumArtistStartsWithOrGreater',
            'artistStartsWithOrGreater',
            'nameStartsWithOrGreater',
            'seriesStatus',
            'groupItemsIntoCollections',
            'minOfficialRating',
            'path',
            'artistIds',
            'subtitleCodecs',
            'videoCodecs',
            'audioCodecs',
            'containers',
            'videoTypes',
            'ids',
            'albums',
            'excludeItemTypes',
            'nameLessThan',
            'parentId',
            'maxPremiereDate',
            'artistType',
            'maxOfficialRating',
            'adjacentTo',
            'locationTypes',
            'excludeLocationTypes',
            'sortOrder',
            'minPremiereDate',
            'minDateLastSaved',
            'minDateLastSavedForUser',
            'seriesTimerId',
            'recursive',
            'searchTerm',
            'excludeItemIds',
            'isPlaceHolder',
            'hasThemeVideo',
            'hasTrailer',
            'hasSubtitles',
            'maxPlayers',
            'minIndexNumber',
            'imageTypeLimit',
            'hasParentalRating',
            'enableImages',
            'enableUserData',
            'isNews',
            'isKids',
            'isSports',
            'hasOverview',
            'isSeries',
            'hasTmdbId',
            'airedDuringSeason',
            'parentIndexNumber',
            'isInProgress',
            'minPlayers',
            'isMovie',
            'limit',
            'isUnaired',
            'hasSpecialFeature',
            'isMissing',
            'isLocked',
            'hasThemeSong',
            'hasOfficialRating',
            'hasImdbId',
            'is3D',
            'isPlayed',
            'startIndex',
            'isHD',
            'minCriticRating',
            'hasTvdbId',
            'isFavorite',
            'minCommunityRating',
        ],
        'getLivetvTimers'                                   => [
            'channelId',
            'seriesTimerId',
        ],
        'postLivetvTimers'                                  => [],
        'getLivetvSeriestimers'                             => [
            'sortBy',
            'sortOrder',
            'startIndex',
            'limit',
        ],
        'postLivetvSeriestimers'                            => [],
        'getLivetvGuideinfo'                                => [],
        'getLivetvTunerhostsTypes'                          => [],
        'getLivetvManageChannels'                           => [
            'sortBy',
            'sortOrder',
            'limit',
            'startIndex',
        ],
        'getLivetvChanneltagsPrefixes'                      => [
            'artistType',
            'tags',
            'studios',
            'personTypes',
            'personIds',
            'person',
            'enableImageTypes',
            'years',
            'officialRatings',
            'artists',
            'genres',
            'sortBy',
            'imageTypes',
            'mediaTypes',
            'maxOfficialRating',
            'filters',
            'studioIds',
            'artistIds',
            'includeItemTypes',
            'minOfficialRating',
            'nameStartsWith',
            'albumArtistStartsWithOrGreater',
            'artistStartsWithOrGreater',
            'nameStartsWithOrGreater',
            'seriesStatus',
            'groupItemsIntoCollections',
            'userId',
            'albums',
            'path',
            'subtitleCodecs',
            'videoCodecs',
            'audioCodecs',
            'containers',
            'videoTypes',
            'ids',
            'anyProviderIdEquals',
            'nameLessThan',
            'excludeItemTypes',
            'excludeItemIds',
            'adjacentTo',
            'locationTypes',
            'excludeLocationTypes',
            'fields',
            'minDateLastSaved',
            'minDateLastSavedForUser',
            'maxPremiereDate',
            'minPremiereDate',
            'recursive',
            'parentId',
            'sortOrder',
            'searchTerm',
            'hasThemeSong',
            'hasTrailer',
            'hasSubtitles',
            'maxPlayers',
            'hasTvdbId',
            'startIndex',
            'hasParentalRating',
            'hasOverview',
            'isKids',
            'enableUserData',
            'imageTypeLimit',
            'enableImages',
            'hasImdbId',
            'hasTmdbId',
            'limit',
            'isNews',
            'isFavorite',
            'minIndexNumber',
            'isHD',
            'isPlaceHolder',
            'parentIndexNumber',
            'isPlayed',
            'minPlayers',
            'isSports',
            'isLocked',
            'isMovie',
            'hasOfficialRating',
            'airedDuringSeason',
            'is3D',
            'minCriticRating',
            'hasSpecialFeature',
            'minCommunityRating',
            'hasThemeVideo',
            'isUnaired',
            'isSeries',
            'isMissing',
        ],
        'getLivetvRecordingsFolders'                        => [
            'userId',
        ],
        'getLivetvTunersDiscvover'                          => [],
        'getLivetvListingprovidersDefault'                  => [],
        'postLivetvListingprovidersDelete'                  => [
            'id',
        ],
        'postLivetvTunerhostsDelete'                        => [
            'id',
        ],
        'getLivetvListingprovidersLineups'                  => [
            'id',
            'type',
            'location',
            'country',
        ],
        'getLivetvChannelsById'                             => [
            'id',
            'userId',
        ],
        'getLivetvProgramsRecommended'                      => [
            'userId',
            'enableImageTypes',
            'genreIds',
            'fields',
            'enableUserData',
            'imageTypeLimit',
            'enableImages',
            'isSports',
            'isKids',
            'isNews',
            'isMovie',
            'isSeries',
            'hasAired',
            'isAiring',
            'limit',
        ],
        'getLivetvRecordingsSeries'                         => [],
        'getLivetvRecordingsById'                           => [
            'id',
            'userId',
        ],
        'deleteLivetvRecordingsById'                        => [
            'id',
        ],
        'getLivetvTimersById'                               => [
            'id',
        ],
        'postLivetvTimersById'                              => [
            'id',
        ],
        'deleteLivetvTimersById'                            => [
            'id',
        ],
        'getLivetvSeriestimersById'                         => [
            'id',
        ],
        'postLivetvSeriestimersById'                        => [
            'id',
        ],
        'deleteLivetvSeriestimersById'                      => [
            'id',
        ],
        'getLivetvTimersDefaults'                           => [
            'programId',
        ],
        'getLivetvRecordingsGroups'                         => [],
        'getLivetvListingprovidersAvailable'                => [],
        'getLivetvLiverecordingsByIdStream'                 => [
            'id',
        ],
        'getLivetvLivestreamfilesByIdStreamByContainer'     => [
            'id',
            'container',
        ],
        'getLivetvListingprovidersSchedulesdirectCountries' => [],
        'getLivetvTunerhostsDefaultByType'                  => [
            'type',
        ],
        'postLivetvRecordingsByIdDelete'                    => [
            'id',
        ],
        'postLivetvTimersByIdDelete'                        => [
            'id',
        ],
        'postLivetvSeriestimersByIdDelete'                  => [
            'id',
        ],
        'postLivetvTunersByIdReset'                         => [
            'id',
        ],
        'postLivetvManageChannelsByIdDisabled'              => [
            'id',
        ],
        'postLivetvManageChannelsByIdSortindex'             => [
            'id',
        ],
    ];
    protected static array $queryParameters  = [
        '/LiveTv/ChannelTags'              => [
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
        '/LiveTv/ChannelMappings'          => [
            'providerId' => true,
        ],
        '/LiveTv/ChannelMappingOptions'    => [
            'providerId' => true,
        ],
        '/LiveTv/ListingProviders'         => [
            'channelId' => true,
            'id'        => true,
        ],
        '/LiveTv/TunerHosts'               => [
            'id' => true,
        ],
        '/LiveTv/EPG'                      => [
            'type'                  => true,
            'userId'                => true,
            'genreIds'              => true,
            'minStartDate'          => true,
            'maxStartDate'          => true,
            'minEndDate'            => true,
            'maxEndDate'            => true,
            'startIndex'            => true,
            'isMovie'               => true,
            'isSeries'              => true,
            'isNews'                => true,
            'isKids'                => true,
            'isSports'              => true,
            'limit'                 => true,
            'isFavorite'            => true,
            'isLiked'               => true,
            'isDisliked'            => true,
            'enableFavoriteSorting' => true,
            'enableImages'          => true,
            'imageTypeLimit'        => true,
            'enableImageTypes'      => true,
            'fields'                => true,
            'addCurrentProgram'     => true,
            'enableUserData'        => true,
            'channelIds'            => true,
        ],
        '/LiveTv/Channels'                 => [
            'type'                           => true,
            'isLiked'                        => true,
            'isDisliked'                     => true,
            'enableFavoriteSorting'          => true,
            'addCurrentProgram'              => true,
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
        '/LiveTv/Programs'                 => [
            'channelIds'       => true,
            'userId'           => true,
            'hasAired'         => true,
            'minStartDate'     => true,
            'maxStartDate'     => true,
            'minEndDate'       => true,
            'maxEndDate'       => true,
            'isMovie'          => true,
            'isSeries'         => true,
            'isNews'           => true,
            'isKids'           => true,
            'isSports'         => true,
            'startIndex'       => true,
            'limit'            => true,
            'sortBy'           => true,
            'sortOrder'        => true,
            'genreIds'         => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'enableUserData'   => true,
            'fields'           => true,
        ],
        '/LiveTv/Recordings'               => [
            'channelId'                      => true,
            'status'                         => true,
            'isInProgress'                   => true,
            'seriesTimerId'                  => true,
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
        '/LiveTv/Timers'                   => [
            'channelId'     => true,
            'seriesTimerId' => true,
        ],
        '/LiveTv/SeriesTimers'             => [
            'sortBy'     => true,
            'sortOrder'  => true,
            'startIndex' => true,
            'limit'      => true,
        ],
        '/LiveTv/Manage/Channels'          => [
            'startIndex' => true,
            'limit'      => true,
            'sortBy'     => true,
            'sortOrder'  => true,
        ],
        '/LiveTv/ChannelTags/Prefixes'     => [
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
        '/LiveTv/Recordings/Folders'       => [
            'userId' => true,
        ],
        '/LiveTv/ListingProviders/Delete'  => [
            'id' => true,
        ],
        '/LiveTv/TunerHosts/Delete'        => [
            'id' => true,
        ],
        '/LiveTv/ListingProviders/Lineups' => [
            'id'       => true,
            'type'     => true,
            'location' => true,
            'country'  => true,
        ],
        '/LiveTv/Channels/{Id}'            => [
            'userId' => true,
        ],
        '/LiveTv/Programs/Recommended'     => [
            'userId'           => true,
            'limit'            => true,
            'isAiring'         => true,
            'hasAired'         => true,
            'isSeries'         => true,
            'isMovie'          => true,
            'isNews'           => true,
            'isKids'           => true,
            'isSports'         => true,
            'enableImages'     => true,
            'imageTypeLimit'   => true,
            'enableImageTypes' => true,
            'genreIds'         => true,
            'fields'           => true,
            'enableUserData'   => true,
        ],
        '/LiveTv/Recordings/{Id}'          => [
            'userId' => true,
        ],
        '/LiveTv/Timers/Defaults'          => [
            'programId' => true,
        ],
    ];
    protected static array $pathParameters   = [
        '/LiveTv/Channels/{Id}'                           => [
            'id' => true,
        ],
        '/LiveTv/Recordings/{Id}'                         => [
            'id' => true,
        ],
        '/LiveTv/Timers/{Id}'                             => [
            'id' => true,
        ],
        '/LiveTv/SeriesTimers/{Id}'                       => [
            'id' => true,
        ],
        '/LiveTv/LiveRecordings/{Id}/stream'              => [
            'id' => true,
        ],
        '/LiveTv/LiveStreamFiles/{Id}/stream.{Container}' => [
            'id'        => true,
            'container' => true,
        ],
        '/LiveTv/TunerHosts/Default/{Type}'               => [
            'type' => true,
        ],
        '/LiveTv/Recordings/{Id}/Delete'                  => [
            'id' => true,
        ],
        '/LiveTv/Timers/{Id}/Delete'                      => [
            'id' => true,
        ],
        '/LiveTv/SeriesTimers/{Id}/Delete'                => [
            'id' => true,
        ],
        '/LiveTv/Tuners/{Id}/Reset'                       => [
            'id' => true,
        ],
        '/LiveTv/Manage/Channels/{Id}/Disabled'           => [
            'id' => true,
        ],
        '/LiveTv/Manage/Channels/{Id}/SortIndex'          => [
            'id' => true,
        ],
    ];
    protected static array $headerParameters = [];

    /**
     * Gets live tv channel tags
     * No authentication required.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvChanneltags(
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
     * Gets the top level live tv folder
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvFolder(): \EmbyClient\Model\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    public function getLivetvChannelmappings(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function postLivetvChannelmappings(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function putLivetvChannelmappings(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function deleteLivetvChannelmappings(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function getLivetvChannelmappingoptions(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function postLivetvChannelmappingoptions(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function putLivetvChannelmappingoptions(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    public function deleteLivetvChannelmappingoptions(string $providerId): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $providerId);
    }

    /**
     * Gets current listing providers
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\ListingsProviderInfo[]
     */
    public function getLivetvListingproviders(string $channelId): array
    {
        return $this->makeApiCall(__FUNCTION__, $channelId);
    }

    /**
     * Adds a listing provider
     * Requires authentication as administrator.
     */
    public function postLivetvListingproviders(): \EmbyClient\Model\LiveTv\ListingsProviderInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes a listing provider
     * Requires authentication as administrator.
     */
    public function deleteLivetvListingproviders(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets tuner hosts
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\TunerHostInfo[]
     */
    public function getLivetvTunerhosts(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Adds a tuner host
     * Requires authentication as administrator.
     */
    public function postLivetvTunerhosts(): \EmbyClient\Model\LiveTv\TunerHostInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes a tuner host
     * Requires authentication as administrator.
     */
    public function deleteLivetvTunerhosts(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets available live tv services.
     * Requires authentication as user.
     */
    public function getLivetvInfo(): \EmbyClient\Model\LiveTv\LiveTvInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the epg.
     * Requires authentication as user.
     */
    public function getLivetvEPG(
        \EmbyClient\Model\LiveTv\ChannelType $type,
        string $userId,
        bool $addCurrentProgram,
        string $fields,
        string $enableImageTypes,
        bool $enableFavoriteSorting,
        string $channelIds,
        string $minEndDate,
        string $maxEndDate,
        string $maxStartDate,
        string $minStartDate,
        string $genreIds,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|bool $isMovie = null,
        null|bool $isLiked = null,
        null|bool $isFavorite = null,
        null|int $limit = null,
        null|bool $isKids = null,
        null|bool $isNews = null,
        null|bool $isSeries = null,
        null|bool $enableUserData = null,
        null|bool $isDisliked = null,
        null|bool $isSports = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\LiveTv\Api\EpgRow {
        return $this->makeApiCall(__FUNCTION__, $type, $userId, $addCurrentProgram, $fields, $enableImageTypes, $enableFavoriteSorting, $channelIds, $minEndDate, $maxEndDate, $maxStartDate, $minStartDate, $genreIds, $imageTypeLimit, $enableImages, $isMovie, $isLiked, $isFavorite, $limit, $isKids, $isNews, $isSeries, $enableUserData, $isDisliked, $isSports, $startIndex);
    }

    /**
     * Gets available live tv channels.
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvChannels(
        \EmbyClient\Model\LiveTv\ChannelType $type,
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
        bool $addCurrentProgram,
        string $artistType,
        string $maxOfficialRating,
        string $adjacentTo,
        string $locationTypes,
        string $excludeLocationTypes,
        string $searchTerm,
        string $minPremiereDate,
        string $minDateLastSaved,
        string $minDateLastSavedForUser,
        bool $enableFavoriteSorting,
        string $excludeItemIds,
        bool $recursive,
        null|bool $isPlaceHolder = null,
        null|bool $hasThemeVideo = null,
        null|bool $hasSpecialFeature = null,
        null|int $minPlayers = null,
        null|int $parentIndexNumber = null,
        null|bool $isSeries = null,
        null|bool $enableImages = null,
        null|bool $isKids = null,
        null|bool $isNews = null,
        null|bool $isSports = null,
        null|bool $isPlayed = null,
        null|bool $hasOverview = null,
        null|bool $hasThemeSong = null,
        null|bool $enableUserData = null,
        null|int $startIndex = null,
        null|int $imageTypeLimit = null,
        null|bool $hasImdbId = null,
        null|int $airedDuringSeason = null,
        null|int $maxPlayers = null,
        null|bool $isDisliked = null,
        null|int $minIndexNumber = null,
        null|bool $isMovie = null,
        null|bool $hasTrailer = null,
        null|bool $isUnaired = null,
        null|bool $hasSubtitles = null,
        null|bool $isMissing = null,
        null|bool $isLocked = null,
        null|bool $isLiked = null,
        null|bool $hasOfficialRating = null,
        null|bool $hasTvdbId = null,
        null|bool $is3D = null,
        null|bool $isHD = null,
        null|int $limit = null,
        null|bool $hasParentalRating = null,
        null|float $minCriticRating = null,
        null|bool $hasTmdbId = null,
        null|bool $isFavorite = null,
        null|float $minCommunityRating = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $type, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $filters, $anyProviderIdEquals, $includeItemTypes, $excludeItemTypes, $studios, $artists, $parentId, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $fields, $nameLessThan, $sortOrder, $maxPremiereDate, $addCurrentProgram, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $searchTerm, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $enableFavoriteSorting, $excludeItemIds, $recursive, $isPlaceHolder, $hasThemeVideo, $hasSpecialFeature, $minPlayers, $parentIndexNumber, $isSeries, $enableImages, $isKids, $isNews, $isSports, $isPlayed, $hasOverview, $hasThemeSong, $enableUserData, $startIndex, $imageTypeLimit, $hasImdbId, $airedDuringSeason, $maxPlayers, $isDisliked, $minIndexNumber, $isMovie, $hasTrailer, $isUnaired, $hasSubtitles, $isMissing, $isLocked, $isLiked, $hasOfficialRating, $hasTvdbId, $is3D, $isHD, $limit, $hasParentalRating, $minCriticRating, $hasTmdbId, $isFavorite, $minCommunityRating);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvPrograms(
        string $channelIds,
        string $userId,
        string $enableImageTypes,
        string $genreIds,
        string $sortOrder,
        string $sortBy,
        string $fields,
        string $maxEndDate,
        string $minEndDate,
        string $maxStartDate,
        string $minStartDate,
        null|bool $isSports = null,
        null|bool $enableUserData = null,
        null|bool $hasAired = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null,
        null|bool $isKids = null,
        null|bool $isNews = null,
        null|bool $isSeries = null,
        null|bool $isMovie = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $channelIds, $userId, $enableImageTypes, $genreIds, $sortOrder, $sortBy, $fields, $maxEndDate, $minEndDate, $maxStartDate, $minStartDate, $isSports, $enableUserData, $hasAired, $imageTypeLimit, $enableImages, $limit, $startIndex, $isKids, $isNews, $isSeries, $isMovie);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function postLivetvPrograms(
        string $channelIds,
        string $userId,
        string $enableImageTypes,
        string $genreIds,
        string $sortOrder,
        string $sortBy,
        string $fields,
        string $maxEndDate,
        string $minEndDate,
        string $maxStartDate,
        string $minStartDate,
        null|bool $isSports = null,
        null|bool $enableUserData = null,
        null|bool $hasAired = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|int $limit = null,
        null|int $startIndex = null,
        null|bool $isKids = null,
        null|bool $isNews = null,
        null|bool $isSeries = null,
        null|bool $isMovie = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $channelIds, $userId, $enableImageTypes, $genreIds, $sortOrder, $sortBy, $fields, $maxEndDate, $minEndDate, $maxStartDate, $minStartDate, $isSports, $enableUserData, $hasAired, $imageTypeLimit, $enableImages, $limit, $startIndex, $isKids, $isNews, $isSeries, $isMovie);
    }

    /**
     * Gets live tv recordings
     * Requires authentication as user.
     */
    public function getLivetvRecordings(
        string $channelId,
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
        \EmbyClient\Model\LiveTv\RecordingStatus $status,
        string $filters,
        string $anyProviderIdEquals,
        string $includeItemTypes,
        string $studios,
        string $artists,
        string $fields,
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
        string $excludeItemTypes,
        string $nameLessThan,
        string $parentId,
        string $maxPremiereDate,
        string $artistType,
        string $maxOfficialRating,
        string $adjacentTo,
        string $locationTypes,
        string $excludeLocationTypes,
        string $sortOrder,
        string $minPremiereDate,
        string $minDateLastSaved,
        string $minDateLastSavedForUser,
        string $seriesTimerId,
        bool $recursive,
        string $searchTerm,
        string $excludeItemIds,
        null|bool $isPlaceHolder = null,
        null|bool $hasThemeVideo = null,
        null|bool $hasTrailer = null,
        null|bool $hasSubtitles = null,
        null|int $maxPlayers = null,
        null|int $minIndexNumber = null,
        null|int $imageTypeLimit = null,
        null|bool $hasParentalRating = null,
        null|bool $enableImages = null,
        null|bool $enableUserData = null,
        null|bool $isNews = null,
        null|bool $isKids = null,
        null|bool $isSports = null,
        null|bool $hasOverview = null,
        null|bool $isSeries = null,
        null|bool $hasTmdbId = null,
        null|int $airedDuringSeason = null,
        null|int $parentIndexNumber = null,
        null|bool $isInProgress = null,
        null|int $minPlayers = null,
        null|bool $isMovie = null,
        null|int $limit = null,
        null|bool $isUnaired = null,
        null|bool $hasSpecialFeature = null,
        null|bool $isMissing = null,
        null|bool $isLocked = null,
        null|bool $hasThemeSong = null,
        null|bool $hasOfficialRating = null,
        null|bool $hasImdbId = null,
        null|bool $is3D = null,
        null|bool $isPlayed = null,
        null|int $startIndex = null,
        null|bool $isHD = null,
        null|float $minCriticRating = null,
        null|bool $hasTvdbId = null,
        null|bool $isFavorite = null,
        null|float $minCommunityRating = null
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $channelId, $officialRatings, $personTypes, $personIds, $person, $enableImageTypes, $years, $tags, $genres, $studioIds, $sortBy, $imageTypes, $mediaTypes, $status, $filters, $anyProviderIdEquals, $includeItemTypes, $studios, $artists, $fields, $userId, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $minOfficialRating, $path, $artistIds, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $albums, $excludeItemTypes, $nameLessThan, $parentId, $maxPremiereDate, $artistType, $maxOfficialRating, $adjacentTo, $locationTypes, $excludeLocationTypes, $sortOrder, $minPremiereDate, $minDateLastSaved, $minDateLastSavedForUser, $seriesTimerId, $recursive, $searchTerm, $excludeItemIds, $isPlaceHolder, $hasThemeVideo, $hasTrailer, $hasSubtitles, $maxPlayers, $minIndexNumber, $imageTypeLimit, $hasParentalRating, $enableImages, $enableUserData, $isNews, $isKids, $isSports, $hasOverview, $isSeries, $hasTmdbId, $airedDuringSeason, $parentIndexNumber, $isInProgress, $minPlayers, $isMovie, $limit, $isUnaired, $hasSpecialFeature, $isMissing, $isLocked, $hasThemeSong, $hasOfficialRating, $hasImdbId, $is3D, $isPlayed, $startIndex, $isHD, $minCriticRating, $hasTvdbId, $isFavorite, $minCommunityRating);
    }

    /**
     * Gets live tv timers
     * Requires authentication as user.
     */
    public function getLivetvTimers(
        string $channelId,
        string $seriesTimerId
    ): \EmbyClient\Model\QueryResult\LiveTv\TimerInfoDto {
        return $this->makeApiCall(__FUNCTION__, $channelId, $seriesTimerId);
    }

    /**
     * Creates a live tv timer
     * Requires authentication as user.
     */
    public function postLivetvTimers(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets live tv series timers
     * Requires authentication as user.
     */
    public function getLivetvSeriestimers(
        string $sortBy,
        \EmbyClient\Model\SortOrder $sortOrder,
        int $startIndex,
        null|int $limit = null
    ): \EmbyClient\Model\QueryResult\LiveTv\SeriesTimerInfoDto {
        return $this->makeApiCall(__FUNCTION__, $sortBy, $sortOrder, $startIndex, $limit);
    }

    /**
     * Creates a live tv series timer
     * Requires authentication as user.
     */
    public function postLivetvSeriestimers(): void
    {
        $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets guide info
     * Requires authentication as user.
     */
    public function getLivetvGuideinfo(): \EmbyClient\Model\LiveTv\GuideInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getLivetvTunerhostsTypes(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets the channel management list
     * Requires authentication as administrator.
     */
    public function getLivetvManageChannels(
        string $sortBy,
        string $sortOrder,
        null|int $limit = null,
        null|int $startIndex = null
    ): \EmbyClient\Model\QueryResult\Emby\LiveTV\ChannelManagementInfo {
        return $this->makeApiCall(__FUNCTION__, $sortBy, $sortOrder, $limit, $startIndex);
    }

    /**
     * Gets live tv channel tag prefixes
     * No authentication required.
     *
     * @return \EmbyClient\Model\LiveTv\Api\TagItem[]
     */
    public function getLivetvChanneltagsPrefixes(
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
    ): array {
        return $this->makeApiCall(__FUNCTION__, $artistType, $tags, $studios, $personTypes, $personIds, $person, $enableImageTypes, $years, $officialRatings, $artists, $genres, $sortBy, $imageTypes, $mediaTypes, $maxOfficialRating, $filters, $studioIds, $artistIds, $includeItemTypes, $minOfficialRating, $nameStartsWith, $albumArtistStartsWithOrGreater, $artistStartsWithOrGreater, $nameStartsWithOrGreater, $seriesStatus, $groupItemsIntoCollections, $userId, $albums, $path, $subtitleCodecs, $videoCodecs, $audioCodecs, $containers, $videoTypes, $ids, $anyProviderIdEquals, $nameLessThan, $excludeItemTypes, $excludeItemIds, $adjacentTo, $locationTypes, $excludeLocationTypes, $fields, $minDateLastSaved, $minDateLastSavedForUser, $maxPremiereDate, $minPremiereDate, $recursive, $parentId, $sortOrder, $searchTerm, $hasThemeSong, $hasTrailer, $hasSubtitles, $maxPlayers, $hasTvdbId, $startIndex, $hasParentalRating, $hasOverview, $isKids, $enableUserData, $imageTypeLimit, $enableImages, $hasImdbId, $hasTmdbId, $limit, $isNews, $isFavorite, $minIndexNumber, $isHD, $isPlaceHolder, $parentIndexNumber, $isPlayed, $minPlayers, $isSports, $isLocked, $isMovie, $hasOfficialRating, $airedDuringSeason, $is3D, $minCriticRating, $hasSpecialFeature, $minCommunityRating, $hasThemeVideo, $isUnaired, $isSeries, $isMissing);
    }

    /**
     * Gets recording folders
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     *
     * @return \EmbyClient\Model\BaseItemDto[]
     */
    public function getLivetvRecordingsFolders(string $userId): array
    {
        return $this->makeApiCall(__FUNCTION__, $userId);
    }

    /**
     * @return \EmbyClient\Model\LiveTv\TunerHostInfo[]
     */
    public function getLivetvTunersDiscvover(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    public function getLivetvListingprovidersDefault(): \EmbyClient\Model\LiveTv\ListingsProviderInfo
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Deletes a listing provider
     * Requires authentication as administrator.
     */
    public function postLivetvListingprovidersDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Deletes a tuner host
     * Requires authentication as administrator.
     */
    public function postLivetvTunerhostsDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets available lineups
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\NameIdPair[]
     */
    public function getLivetvListingprovidersLineups(
        string $id,
        string $type,
        string $location,
        string $country
    ): array {
        return $this->makeApiCall(__FUNCTION__, $id, $type, $location, $country);
    }

    /**
     * Gets a live tv channel
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvChannelsById(
        string $id,
        string $userId
    ): \EmbyClient\Model\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $userId);
    }

    /**
     * Gets available live tv epgs..
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvProgramsRecommended(
        string $userId,
        string $enableImageTypes,
        string $genreIds,
        string $fields,
        null|bool $enableUserData = null,
        null|int $imageTypeLimit = null,
        null|bool $enableImages = null,
        null|bool $isSports = null,
        null|bool $isKids = null,
        null|bool $isNews = null,
        null|bool $isMovie = null,
        null|bool $isSeries = null,
        null|bool $hasAired = null,
        null|bool $isAiring = null,
        null|int $limit = null
    ): \EmbyClient\Model\QueryResult\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $userId, $enableImageTypes, $genreIds, $fields, $enableUserData, $imageTypeLimit, $enableImages, $isSports, $isKids, $isNews, $isMovie, $isSeries, $hasAired, $isAiring, $limit);
    }

    /**
     * Gets live tv recordings
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvRecordingsSeries(): \EmbyClient\Model\QueryResult\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a live tv recording
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvRecordingsById(
        string $id,
        string $userId
    ): \EmbyClient\Model\BaseItemDto {
        return $this->makeApiCall(__FUNCTION__, $id, $userId);
    }

    /**
     * Deletes a live tv recording
     * Requires authentication as user.
     */
    public function deleteLivetvRecordingsById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a live tv timer
     * Requires authentication as user.
     */
    public function getLivetvTimersById(string $id): \EmbyClient\Model\LiveTv\TimerInfoDto
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a live tv timer
     * Requires authentication as user.
     */
    public function postLivetvTimersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a live tv timer
     * Requires authentication as user.
     */
    public function deleteLivetvTimersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a live tv series timer
     * Requires authentication as user.
     */
    public function getLivetvSeriestimersById(string $id): \EmbyClient\Model\LiveTv\TimerInfoDto
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Updates a live tv series timer
     * Requires authentication as user.
     */
    public function postLivetvSeriestimersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a live tv series timer
     * Requires authentication as user.
     */
    public function deleteLivetvSeriestimersById(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets default values for a new timer
     * Requires authentication as user.
     */
    public function getLivetvTimersDefaults(string $programId): \EmbyClient\Model\LiveTv\SeriesTimerInfoDto
    {
        return $this->makeApiCall(__FUNCTION__, $programId);
    }

    /**
     * Gets live tv recording groups
     * Requires authentication as user.
     *
     * @see https://github.com/MediaBrowser/Emby/wiki/Item-Information API Documentation: Item Information
     */
    public function getLivetvRecordingsGroups(): \EmbyClient\Model\QueryResult\BaseItemDto
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets listing provider
     * Requires authentication as administrator.
     *
     * @return \EmbyClient\Model\LiveTv\Api\ListingProviderTypeInfo[]
     */
    public function getLivetvListingprovidersAvailable(): array
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets a live tv channel
     * No authentication required.
     */
    public function getLivetvLiverecordingsByIdStream(string $id): mixed
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Gets a live tv channel
     * No authentication required.
     */
    public function getLivetvLivestreamfilesByIdStreamByContainer(
        string $id,
        string $container
    ): mixed {
        return $this->makeApiCall(__FUNCTION__, $id, $container);
    }

    /**
     * Gets available lineups
     * Requires authentication as administrator.
     */
    public function getLivetvListingprovidersSchedulesdirectCountries(): mixed
    {
        return $this->makeApiCall(__FUNCTION__);
    }

    /**
     * Gets tuner hosts
     * Requires authentication as administrator.
     */
    public function getLivetvTunerhostsDefaultByType(string $type): \EmbyClient\Model\LiveTv\TunerHostInfo
    {
        return $this->makeApiCall(__FUNCTION__, $type);
    }

    /**
     * Deletes a live tv recording
     * Requires authentication as user.
     */
    public function postLivetvRecordingsByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a live tv timer
     * Requires authentication as user.
     */
    public function postLivetvTimersByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Cancels a live tv series timer
     * Requires authentication as user.
     */
    public function postLivetvSeriestimersByIdDelete(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Resets a tv tuner
     * Requires authentication as administrator.
     */
    public function postLivetvTunersByIdReset(string $id): void
    {
        $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Sets a channel disabled or not
     * Requires authentication as administrator.
     */
    public function postLivetvManageChannelsByIdDisabled(string $id): \EmbyClient\Model\QueryResult\Emby\LiveTV\ChannelManagementInfo
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }

    /**
     * Sets a channel sort index
     * Requires authentication as administrator.
     */
    public function postLivetvManageChannelsByIdSortindex(string $id): \EmbyClient\Model\QueryResult\Emby\LiveTV\ChannelManagementInfo
    {
        return $this->makeApiCall(__FUNCTION__, $id);
    }
}

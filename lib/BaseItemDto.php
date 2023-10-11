<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.BaseItemDto')]
class BaseItemDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dateCreated     ' => \DateTimeImmutable::class,
        'video3DFormat   ' => Video3DFormat::class,
        'premiereDate    ' => \DateTimeImmutable::class,
        'externalUrls    ' => ExternalUrl::class,
        'mediaSources    ' => MediaSourceInfo::class,
        'playAccess      ' => Library\PlayAccess::class,
        'remoteTrailers  ' => MediaUrl::class,
        'providerIds     ' => ProviderIdDictionary::class,
        'people          ' => BaseItemPerson::class,
        'studios         ' => NameLongIdPair::class,
        'genreItems      ' => NameLongIdPair::class,
        'tagItems        ' => NameLongIdPair::class,
        'userData        ' => UserItemDataDto::class,
        'airDays         ' => DayOfWeek::class,
        'artistItems     ' => NameIdPair::class,
        'composers       ' => NameIdPair::class,
        'albumArtists    ' => NameIdPair::class,
        'mediaStreams    ' => MediaStream::class,
        'chapters        ' => ChapterInfo::class,
        'locationType    ' => LocationType::class,
        'endDate         ' => \DateTimeImmutable::class,
        'lockedFields    ' => MetadataFields::class,
        'imageOrientation' => Drawing\ImageOrientation::class,
        'startDate       ' => \DateTimeImmutable::class,
        'timerType       ' => LiveTv\TimerType::class,
        'currentProgram  ' => BaseItemDto::class,
    ];

    protected string $name;
    protected string $originalTitle;
    protected string $serverId;
    protected string $id;
    protected string $etag;
    protected string $prefix;
    protected string $playlistItemId;
    protected \DateTimeImmutable $dateCreated;
    protected string $extraType;
    protected int $sortIndexNumber;
    protected int $sortParentIndexNumber;
    protected int $airsBeforeSeasonNumber;
    protected int $airsAfterSeasonNumber;
    protected int $airsBeforeEpisodeNumber;
    protected bool $canDelete;
    protected bool $canDownload;
    protected bool $supportsResume;
    protected string $presentationUniqueKey;
    protected string $preferredMetadataLanguage;
    protected string $preferredMetadataCountryCode;
    protected bool $supportsSync;
    protected string $container;
    protected string $sortName;
    protected string $forcedSortName;
    protected Video3DFormat $video3DFormat;
    protected \DateTimeImmutable $premiereDate;
    /** @var ExternalUrl[] */
    protected array $externalUrls;
    /** @var MediaSourceInfo[] */
    protected array $mediaSources;
    protected float $criticRating;
    protected int $gameSystemId;
    protected bool $asSeries;
    protected string $gameSystem;
    /** @var string[] */
    protected array $productionLocations;
    protected string $path;
    protected string $officialRating;
    protected string $customRating;
    protected string $channelId;
    protected string $channelName;
    protected string $overview;
    /** @var string[] */
    protected array $taglines;
    /** @var string[] */
    protected array $genres;
    protected float $communityRating;
    protected int $runTimeTicks;
    protected int $size;
    protected string $fileName;
    protected int $bitrate;
    protected Library\PlayAccess $playAccess;
    protected int $productionYear;
    protected string $number;
    protected string $channelNumber;
    protected int $indexNumber;
    protected int $indexNumberEnd;
    protected int $parentIndexNumber;
    /** @var MediaUrl[] */
    protected array $remoteTrailers;
    protected ProviderIdDictionary $providerIds;
    protected bool $isFolder;
    protected string $parentId;
    protected string $type;
    /** @var BaseItemPerson[] */
    protected array $people;
    /** @var NameLongIdPair[] */
    protected array $studios;
    /** @var NameLongIdPair[] */
    protected array $genreItems;
    /** @var NameLongIdPair[] */
    protected array $tagItems;
    protected string $parentLogoItemId;
    protected string $parentBackdropItemId;
    /** @var string[] */
    protected array $parentBackdropImageTags;
    protected int $localTrailerCount;
    protected UserItemDataDto $userData;
    protected int $recursiveItemCount;
    protected int $childCount;
    protected string $seriesName;
    protected string $seriesId;
    protected string $seasonId;
    protected int $specialFeatureCount;
    protected string $displayPreferencesId;
    protected string $status;
    /** @var DayOfWeek[] */
    protected array $airDays;
    /** @var string[] */
    protected array $tags;
    protected float $primaryImageAspectRatio;
    /** @var string[] */
    protected array $artists;
    /** @var NameIdPair[] */
    protected array $artistItems;
    /** @var NameIdPair[] */
    protected array $composers;
    protected string $album;
    protected string $collectionType;
    protected string $displayOrder;
    protected string $albumId;
    protected string $albumPrimaryImageTag;
    protected string $seriesPrimaryImageTag;
    protected string $albumArtist;
    /** @var NameIdPair[] */
    protected array $albumArtists;
    protected string $seasonName;
    /** @var MediaStream[] */
    protected array $mediaStreams;
    protected int $partCount;
    protected object $imageTags;
    /** @var string[] */
    protected array $backdropImageTags;
    protected string $parentLogoImageTag;
    protected string $seriesStudio;
    protected string $parentThumbItemId;
    protected string $parentThumbImageTag;
    /** @var ChapterInfo[] */
    protected array $chapters;
    protected LocationType $locationType;
    protected string $mediaType;
    protected \DateTimeImmutable $endDate;
    /** @var MetadataFields[] */
    protected array $lockedFields;
    protected bool $lockData;
    protected int $width;
    protected int $height;
    protected string $cameraMake;
    protected string $cameraModel;
    protected string $software;
    protected float $exposureTime;
    protected float $focalLength;
    protected Drawing\ImageOrientation $imageOrientation;
    protected float $aperture;
    protected float $shutterSpeed;
    protected float $latitude;
    protected float $longitude;
    protected float $altitude;
    protected int $isoSpeedRating;
    protected string $seriesTimerId;
    protected string $channelPrimaryImageTag;
    protected \DateTimeImmutable $startDate;
    protected float $completionPercentage;
    protected bool $isRepeat;
    protected bool $isNew;
    protected string $episodeTitle;
    protected bool $isMovie;
    protected bool $isSports;
    protected bool $isSeries;
    protected bool $isLive;
    protected bool $isNews;
    protected bool $isKids;
    protected bool $isPremiere;
    protected LiveTv\TimerType $timerType;
    protected bool $disabled;
    protected string $managementId;
    protected string $timerId;
    protected BaseItemDto $currentProgram;
    protected int $movieCount;
    protected int $seriesCount;
    protected int $albumCount;
    protected int $songCount;
    protected int $musicVideoCount;
    /** @var string[] */
    protected array $subviews;
    protected string $listingsProviderId;
    protected string $listingsChannelId;
    protected string $listingsPath;
    protected string $listingsId;
    protected string $listingsChannelName;
    protected string $listingsChannelNumber;
    protected string $affiliateCallSign;

    public function getName(): string
    {
        return $this->name;
    }

    public function getOriginalTitle(): string
    {
        return $this->originalTitle;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getEtag(): string
    {
        return $this->etag;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getPlaylistItemId(): string
    {
        return $this->playlistItemId;
    }

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getExtraType(): string
    {
        return $this->extraType;
    }

    public function getSortIndexNumber(): int
    {
        return $this->sortIndexNumber;
    }

    public function getSortParentIndexNumber(): int
    {
        return $this->sortParentIndexNumber;
    }

    public function getAirsBeforeSeasonNumber(): int
    {
        return $this->airsBeforeSeasonNumber;
    }

    public function getAirsAfterSeasonNumber(): int
    {
        return $this->airsAfterSeasonNumber;
    }

    public function getAirsBeforeEpisodeNumber(): int
    {
        return $this->airsBeforeEpisodeNumber;
    }

    public function getCanDelete(): bool
    {
        return $this->canDelete;
    }

    public function getCanDownload(): bool
    {
        return $this->canDownload;
    }

    public function getSupportsResume(): bool
    {
        return $this->supportsResume;
    }

    public function getPresentationUniqueKey(): string
    {
        return $this->presentationUniqueKey;
    }

    public function getPreferredMetadataLanguage(): string
    {
        return $this->preferredMetadataLanguage;
    }

    public function getPreferredMetadataCountryCode(): string
    {
        return $this->preferredMetadataCountryCode;
    }

    public function getSupportsSync(): bool
    {
        return $this->supportsSync;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getSortName(): string
    {
        return $this->sortName;
    }

    public function getForcedSortName(): string
    {
        return $this->forcedSortName;
    }

    public function getVideo3DFormat(): Video3DFormat
    {
        return $this->video3DFormat;
    }

    public function getPremiereDate(): \DateTimeImmutable
    {
        return $this->premiereDate;
    }

    /**
     * @return ExternalUrl[]
     */
    public function getExternalUrls(): array
    {
        return $this->externalUrls;
    }

    /**
     * @return MediaSourceInfo[]
     */
    public function getMediaSources(): array
    {
        return $this->mediaSources;
    }

    public function getCriticRating(): float
    {
        return $this->criticRating;
    }

    public function getGameSystemId(): int
    {
        return $this->gameSystemId;
    }

    public function getAsSeries(): bool
    {
        return $this->asSeries;
    }

    public function getGameSystem(): string
    {
        return $this->gameSystem;
    }

    /**
     * @return string[]
     */
    public function getProductionLocations(): array
    {
        return $this->productionLocations;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getOfficialRating(): string
    {
        return $this->officialRating;
    }

    public function getCustomRating(): string
    {
        return $this->customRating;
    }

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    public function getChannelName(): string
    {
        return $this->channelName;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    /**
     * @return string[]
     */
    public function getTaglines(): array
    {
        return $this->taglines;
    }

    /**
     * @return string[]
     */
    public function getGenres(): array
    {
        return $this->genres;
    }

    public function getCommunityRating(): float
    {
        return $this->communityRating;
    }

    public function getRunTimeTicks(): int
    {
        return $this->runTimeTicks;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    public function getPlayAccess(): Library\PlayAccess
    {
        return $this->playAccess;
    }

    public function getProductionYear(): int
    {
        return $this->productionYear;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getChannelNumber(): string
    {
        return $this->channelNumber;
    }

    public function getIndexNumber(): int
    {
        return $this->indexNumber;
    }

    public function getIndexNumberEnd(): int
    {
        return $this->indexNumberEnd;
    }

    public function getParentIndexNumber(): int
    {
        return $this->parentIndexNumber;
    }

    /**
     * @return MediaUrl[]
     */
    public function getRemoteTrailers(): array
    {
        return $this->remoteTrailers;
    }

    public function getProviderIds(): ProviderIdDictionary
    {
        return $this->providerIds;
    }

    public function getIsFolder(): bool
    {
        return $this->isFolder;
    }

    public function getParentId(): string
    {
        return $this->parentId;
    }

    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return BaseItemPerson[]
     */
    public function getPeople(): array
    {
        return $this->people;
    }

    /**
     * @return NameLongIdPair[]
     */
    public function getStudios(): array
    {
        return $this->studios;
    }

    /**
     * @return NameLongIdPair[]
     */
    public function getGenreItems(): array
    {
        return $this->genreItems;
    }

    /**
     * @return NameLongIdPair[]
     */
    public function getTagItems(): array
    {
        return $this->tagItems;
    }

    public function getParentLogoItemId(): string
    {
        return $this->parentLogoItemId;
    }

    public function getParentBackdropItemId(): string
    {
        return $this->parentBackdropItemId;
    }

    /**
     * @return string[]
     */
    public function getParentBackdropImageTags(): array
    {
        return $this->parentBackdropImageTags;
    }

    public function getLocalTrailerCount(): int
    {
        return $this->localTrailerCount;
    }

    public function getUserData(): UserItemDataDto
    {
        return $this->userData;
    }

    public function getRecursiveItemCount(): int
    {
        return $this->recursiveItemCount;
    }

    public function getChildCount(): int
    {
        return $this->childCount;
    }

    public function getSeriesName(): string
    {
        return $this->seriesName;
    }

    public function getSeriesId(): string
    {
        return $this->seriesId;
    }

    public function getSeasonId(): string
    {
        return $this->seasonId;
    }

    public function getSpecialFeatureCount(): int
    {
        return $this->specialFeatureCount;
    }

    public function getDisplayPreferencesId(): string
    {
        return $this->displayPreferencesId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return DayOfWeek[]
     */
    public function getAirDays(): array
    {
        return $this->airDays;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }

    public function getPrimaryImageAspectRatio(): float
    {
        return $this->primaryImageAspectRatio;
    }

    /**
     * @return string[]
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * @return NameIdPair[]
     */
    public function getArtistItems(): array
    {
        return $this->artistItems;
    }

    /**
     * @return NameIdPair[]
     */
    public function getComposers(): array
    {
        return $this->composers;
    }

    public function getAlbum(): string
    {
        return $this->album;
    }

    public function getCollectionType(): string
    {
        return $this->collectionType;
    }

    public function getDisplayOrder(): string
    {
        return $this->displayOrder;
    }

    public function getAlbumId(): string
    {
        return $this->albumId;
    }

    public function getAlbumPrimaryImageTag(): string
    {
        return $this->albumPrimaryImageTag;
    }

    public function getSeriesPrimaryImageTag(): string
    {
        return $this->seriesPrimaryImageTag;
    }

    public function getAlbumArtist(): string
    {
        return $this->albumArtist;
    }

    /**
     * @return NameIdPair[]
     */
    public function getAlbumArtists(): array
    {
        return $this->albumArtists;
    }

    public function getSeasonName(): string
    {
        return $this->seasonName;
    }

    /**
     * @return MediaStream[]
     */
    public function getMediaStreams(): array
    {
        return $this->mediaStreams;
    }

    public function getPartCount(): int
    {
        return $this->partCount;
    }

    public function getImageTags(): object
    {
        return $this->imageTags;
    }

    /**
     * @return string[]
     */
    public function getBackdropImageTags(): array
    {
        return $this->backdropImageTags;
    }

    public function getParentLogoImageTag(): string
    {
        return $this->parentLogoImageTag;
    }

    public function getSeriesStudio(): string
    {
        return $this->seriesStudio;
    }

    public function getParentThumbItemId(): string
    {
        return $this->parentThumbItemId;
    }

    public function getParentThumbImageTag(): string
    {
        return $this->parentThumbImageTag;
    }

    /**
     * @return ChapterInfo[]
     */
    public function getChapters(): array
    {
        return $this->chapters;
    }

    public function getLocationType(): LocationType
    {
        return $this->locationType;
    }

    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    public function getEndDate(): \DateTimeImmutable
    {
        return $this->endDate;
    }

    /**
     * @return MetadataFields[]
     */
    public function getLockedFields(): array
    {
        return $this->lockedFields;
    }

    public function getLockData(): bool
    {
        return $this->lockData;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getCameraMake(): string
    {
        return $this->cameraMake;
    }

    public function getCameraModel(): string
    {
        return $this->cameraModel;
    }

    public function getSoftware(): string
    {
        return $this->software;
    }

    public function getExposureTime(): float
    {
        return $this->exposureTime;
    }

    public function getFocalLength(): float
    {
        return $this->focalLength;
    }

    public function getImageOrientation(): Drawing\ImageOrientation
    {
        return $this->imageOrientation;
    }

    public function getAperture(): float
    {
        return $this->aperture;
    }

    public function getShutterSpeed(): float
    {
        return $this->shutterSpeed;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getAltitude(): float
    {
        return $this->altitude;
    }

    public function getIsoSpeedRating(): int
    {
        return $this->isoSpeedRating;
    }

    public function getSeriesTimerId(): string
    {
        return $this->seriesTimerId;
    }

    public function getChannelPrimaryImageTag(): string
    {
        return $this->channelPrimaryImageTag;
    }

    public function getStartDate(): \DateTimeImmutable
    {
        return $this->startDate;
    }

    public function getCompletionPercentage(): float
    {
        return $this->completionPercentage;
    }

    public function getIsRepeat(): bool
    {
        return $this->isRepeat;
    }

    public function getIsNew(): bool
    {
        return $this->isNew;
    }

    public function getEpisodeTitle(): string
    {
        return $this->episodeTitle;
    }

    public function getIsMovie(): bool
    {
        return $this->isMovie;
    }

    public function getIsSports(): bool
    {
        return $this->isSports;
    }

    public function getIsSeries(): bool
    {
        return $this->isSeries;
    }

    public function getIsLive(): bool
    {
        return $this->isLive;
    }

    public function getIsNews(): bool
    {
        return $this->isNews;
    }

    public function getIsKids(): bool
    {
        return $this->isKids;
    }

    public function getIsPremiere(): bool
    {
        return $this->isPremiere;
    }

    public function getTimerType(): LiveTv\TimerType
    {
        return $this->timerType;
    }

    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    public function getManagementId(): string
    {
        return $this->managementId;
    }

    public function getTimerId(): string
    {
        return $this->timerId;
    }

    public function getCurrentProgram(): BaseItemDto
    {
        return $this->currentProgram;
    }

    public function getMovieCount(): int
    {
        return $this->movieCount;
    }

    public function getSeriesCount(): int
    {
        return $this->seriesCount;
    }

    public function getAlbumCount(): int
    {
        return $this->albumCount;
    }

    public function getSongCount(): int
    {
        return $this->songCount;
    }

    public function getMusicVideoCount(): int
    {
        return $this->musicVideoCount;
    }

    /**
     * @return string[]
     */
    public function getSubviews(): array
    {
        return $this->subviews;
    }

    public function getListingsProviderId(): string
    {
        return $this->listingsProviderId;
    }

    public function getListingsChannelId(): string
    {
        return $this->listingsChannelId;
    }

    public function getListingsPath(): string
    {
        return $this->listingsPath;
    }

    public function getListingsId(): string
    {
        return $this->listingsId;
    }

    public function getListingsChannelName(): string
    {
        return $this->listingsChannelName;
    }

    public function getListingsChannelNumber(): string
    {
        return $this->listingsChannelNumber;
    }

    public function getAffiliateCallSign(): string
    {
        return $this->affiliateCallSign;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.LibraryOptions')]
class LibraryOptions extends \EmbyClient\Model
{
    protected static array $mapping = [
        'pathInfos  ' => MediaPathInfo::class,
        'typeOptions' => TypeOptions::class,
    ];

    protected bool $enableArchiveMediaFiles;
    protected bool $enablePhotos;
    protected bool $enableRealtimeMonitor;
    protected bool $enableMarkerDetection;
    protected bool $enableMarkerDetectionDuringLibraryScan;
    protected bool $enableChapterImageExtraction;
    protected bool $extractChapterImagesDuringLibraryScan;
    protected bool $downloadImagesInAdvance;
    /** @var MediaPathInfo[] */
    protected array $pathInfos;
    protected bool $ignoreHiddenFiles;
    /** @var string[] */
    protected array $ignoreFileExtensions;
    protected bool $saveLocalMetadata;
    protected bool $saveMetadataHidden;
    protected bool $saveLocalThumbnailSets;
    protected bool $importMissingEpisodes;
    protected bool $importPlaylists;
    protected bool $enableAutomaticSeriesGrouping;
    protected bool $enableEmbeddedTitles;
    protected bool $enableAudioResume;
    protected int $automaticRefreshIntervalDays;
    protected string $preferredMetadataLanguage;
    protected string $preferredImageLanguage;
    protected string $contentType;
    protected string $metadataCountryCode;
    protected string $seasonZeroDisplayName;
    protected string $name;
    /** @var string[] */
    protected array $metadataSavers;
    /** @var string[] */
    protected array $disabledLocalMetadataReaders;
    /** @var string[] */
    protected array $localMetadataReaderOrder;
    /** @var string[] */
    protected array $disabledLyricsFetchers;
    protected bool $saveLyricsWithMedia;
    protected int $lyricsDownloadMaxAgeDays;
    /** @var string[] */
    protected array $lyricsFetcherOrder;
    /** @var string[] */
    protected array $lyricsDownloadLanguages;
    /** @var string[] */
    protected array $disabledSubtitleFetchers;
    /** @var string[] */
    protected array $subtitleFetcherOrder;
    protected bool $skipSubtitlesIfEmbeddedSubtitlesPresent;
    protected bool $skipSubtitlesIfAudioTrackMatches;
    /** @var string[] */
    protected array $subtitleDownloadLanguages;
    protected int $subtitleDownloadMaxAgeDays;
    protected bool $requirePerfectSubtitleMatch;
    protected bool $saveSubtitlesWithMedia;
    protected bool $forcedSubtitlesOnly;
    /** @var TypeOptions[] */
    protected array $typeOptions;
    protected bool $collapseSingleItemFolders;
    protected bool $enableAdultMetadata;
    protected bool $importCollections;
    protected int $minCollectionItems;
    protected string $musicFolderStructure;
    protected int $minResumePct;
    protected int $maxResumePct;
    protected int $minResumeDurationSeconds;
    protected int $thumbnailImagesIntervalSeconds;
    protected int $sampleIgnoreSize;

    public function getEnableArchiveMediaFiles(): bool
    {
        return $this->enableArchiveMediaFiles;
    }

    public function getEnablePhotos(): bool
    {
        return $this->enablePhotos;
    }

    public function getEnableRealtimeMonitor(): bool
    {
        return $this->enableRealtimeMonitor;
    }

    public function getEnableMarkerDetection(): bool
    {
        return $this->enableMarkerDetection;
    }

    public function getEnableMarkerDetectionDuringLibraryScan(): bool
    {
        return $this->enableMarkerDetectionDuringLibraryScan;
    }

    public function getEnableChapterImageExtraction(): bool
    {
        return $this->enableChapterImageExtraction;
    }

    public function getExtractChapterImagesDuringLibraryScan(): bool
    {
        return $this->extractChapterImagesDuringLibraryScan;
    }

    public function getDownloadImagesInAdvance(): bool
    {
        return $this->downloadImagesInAdvance;
    }

    /**
     * @return MediaPathInfo[]
     */
    public function getPathInfos(): array
    {
        return $this->pathInfos;
    }

    public function getIgnoreHiddenFiles(): bool
    {
        return $this->ignoreHiddenFiles;
    }

    /**
     * @return string[]
     */
    public function getIgnoreFileExtensions(): array
    {
        return $this->ignoreFileExtensions;
    }

    public function getSaveLocalMetadata(): bool
    {
        return $this->saveLocalMetadata;
    }

    public function getSaveMetadataHidden(): bool
    {
        return $this->saveMetadataHidden;
    }

    public function getSaveLocalThumbnailSets(): bool
    {
        return $this->saveLocalThumbnailSets;
    }

    public function getImportMissingEpisodes(): bool
    {
        return $this->importMissingEpisodes;
    }

    public function getImportPlaylists(): bool
    {
        return $this->importPlaylists;
    }

    public function getEnableAutomaticSeriesGrouping(): bool
    {
        return $this->enableAutomaticSeriesGrouping;
    }

    public function getEnableEmbeddedTitles(): bool
    {
        return $this->enableEmbeddedTitles;
    }

    public function getEnableAudioResume(): bool
    {
        return $this->enableAudioResume;
    }

    public function getAutomaticRefreshIntervalDays(): int
    {
        return $this->automaticRefreshIntervalDays;
    }

    public function getPreferredMetadataLanguage(): string
    {
        return $this->preferredMetadataLanguage;
    }

    public function getPreferredImageLanguage(): string
    {
        return $this->preferredImageLanguage;
    }

    public function getContentType(): string
    {
        return $this->contentType;
    }

    public function getMetadataCountryCode(): string
    {
        return $this->metadataCountryCode;
    }

    public function getSeasonZeroDisplayName(): string
    {
        return $this->seasonZeroDisplayName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string[]
     */
    public function getMetadataSavers(): array
    {
        return $this->metadataSavers;
    }

    /**
     * @return string[]
     */
    public function getDisabledLocalMetadataReaders(): array
    {
        return $this->disabledLocalMetadataReaders;
    }

    /**
     * @return string[]
     */
    public function getLocalMetadataReaderOrder(): array
    {
        return $this->localMetadataReaderOrder;
    }

    /**
     * @return string[]
     */
    public function getDisabledLyricsFetchers(): array
    {
        return $this->disabledLyricsFetchers;
    }

    public function getSaveLyricsWithMedia(): bool
    {
        return $this->saveLyricsWithMedia;
    }

    public function getLyricsDownloadMaxAgeDays(): int
    {
        return $this->lyricsDownloadMaxAgeDays;
    }

    /**
     * @return string[]
     */
    public function getLyricsFetcherOrder(): array
    {
        return $this->lyricsFetcherOrder;
    }

    /**
     * @return string[]
     */
    public function getLyricsDownloadLanguages(): array
    {
        return $this->lyricsDownloadLanguages;
    }

    /**
     * @return string[]
     */
    public function getDisabledSubtitleFetchers(): array
    {
        return $this->disabledSubtitleFetchers;
    }

    /**
     * @return string[]
     */
    public function getSubtitleFetcherOrder(): array
    {
        return $this->subtitleFetcherOrder;
    }

    public function getSkipSubtitlesIfEmbeddedSubtitlesPresent(): bool
    {
        return $this->skipSubtitlesIfEmbeddedSubtitlesPresent;
    }

    public function getSkipSubtitlesIfAudioTrackMatches(): bool
    {
        return $this->skipSubtitlesIfAudioTrackMatches;
    }

    /**
     * @return string[]
     */
    public function getSubtitleDownloadLanguages(): array
    {
        return $this->subtitleDownloadLanguages;
    }

    public function getSubtitleDownloadMaxAgeDays(): int
    {
        return $this->subtitleDownloadMaxAgeDays;
    }

    public function getRequirePerfectSubtitleMatch(): bool
    {
        return $this->requirePerfectSubtitleMatch;
    }

    public function getSaveSubtitlesWithMedia(): bool
    {
        return $this->saveSubtitlesWithMedia;
    }

    public function getForcedSubtitlesOnly(): bool
    {
        return $this->forcedSubtitlesOnly;
    }

    /**
     * @return TypeOptions[]
     */
    public function getTypeOptions(): array
    {
        return $this->typeOptions;
    }

    public function getCollapseSingleItemFolders(): bool
    {
        return $this->collapseSingleItemFolders;
    }

    public function getEnableAdultMetadata(): bool
    {
        return $this->enableAdultMetadata;
    }

    public function getImportCollections(): bool
    {
        return $this->importCollections;
    }

    public function getMinCollectionItems(): int
    {
        return $this->minCollectionItems;
    }

    public function getMusicFolderStructure(): string
    {
        return $this->musicFolderStructure;
    }

    public function getMinResumePct(): int
    {
        return $this->minResumePct;
    }

    public function getMaxResumePct(): int
    {
        return $this->maxResumePct;
    }

    public function getMinResumeDurationSeconds(): int
    {
        return $this->minResumeDurationSeconds;
    }

    public function getThumbnailImagesIntervalSeconds(): int
    {
        return $this->thumbnailImagesIntervalSeconds;
    }

    public function getSampleIgnoreSize(): int
    {
        return $this->sampleIgnoreSize;
    }
}

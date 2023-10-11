<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.ServerConfiguration')]
class ServerConfiguration extends \EmbyClient\Model
{
    protected static array $mapping = [
        'imageSavingConvention' => ImageSavingConvention::class,
        'pathSubstitutions    ' => PathSubstitution::class,
    ];

    protected bool $enableUPnP;
    protected int $publicPort;
    protected int $publicHttpsPort;
    protected int $httpServerPortNumber;
    protected int $httpsPortNumber;
    protected bool $enableHttps;
    protected string $certificatePath;
    protected string $certificatePassword;
    protected bool $isPortAuthorized;
    protected bool $autoRunWebApp;
    protected bool $enableRemoteAccess;
    protected bool $logAllQueryTimes;
    protected bool $enableCaseSensitiveItemIds;
    protected string $metadataPath;
    protected string $metadataNetworkPath;
    protected string $preferredMetadataLanguage;
    protected string $metadataCountryCode;
    /** @var string[] */
    protected array $sortRemoveWords;
    protected int $libraryMonitorDelay;
    protected bool $enableDashboardResponseCaching;
    protected string $dashboardSourcePath;
    protected ImageSavingConvention $imageSavingConvention;
    protected bool $enableAutomaticRestart;
    protected bool $collectionFolderIdsMigrated;
    protected string $serverName;
    protected string $wanDdns;
    protected string $uICulture;
    protected bool $saveMetadataHidden;
    protected int $remoteClientBitrateLimit;
    protected bool $displaySpecialsWithinSeasons;
    /** @var string[] */
    protected array $localNetworkSubnets;
    /** @var string[] */
    protected array $localNetworkAddresses;
    protected bool $enableExternalContentInSuggestions;
    protected bool $requireHttps;
    protected bool $isBehindProxy;
    /** @var string[] */
    protected array $remoteIPFilter;
    protected bool $isRemoteIPFilterBlacklist;
    protected int $imageExtractionTimeoutMs;
    /** @var PathSubstitution[] */
    protected array $pathSubstitutions;
    /** @var string[] */
    protected array $uninstalledPlugins;
    protected bool $collapseVideoFolders;
    protected bool $enableOriginalTrackTitles;
    protected bool $vacuumDatabaseOnStartup;
    protected int $simultaneousStreamLimit;
    protected int $databaseCacheSizeMB;
    protected bool $enableSqLiteMmio;
    protected bool $nextUpUpgraded;
    protected bool $channelOptionsUpgraded;
    protected bool $timerIdsUpgraded;
    protected bool $forcedSortNameUpgraded;
    protected bool $inheritedParentalRatingValueUpgraded;
    protected bool $enablePeopleLetterSubFolders;
    protected bool $optimizeDatabaseOnShutdown;
    protected int $databaseAnalysisLimit;
    protected bool $disableAsyncIO;
    protected bool $enableDebugLevelLogging;
    protected string $revertDebugLogging;
    protected bool $enableAutoUpdate;
    protected int $logFileRetentionDays;
    protected bool $runAtStartup;
    protected bool $isStartupWizardCompleted;
    protected string $cachePath;

    public function getEnableUPnP(): bool
    {
        return $this->enableUPnP;
    }

    public function getPublicPort(): int
    {
        return $this->publicPort;
    }

    public function getPublicHttpsPort(): int
    {
        return $this->publicHttpsPort;
    }

    public function getHttpServerPortNumber(): int
    {
        return $this->httpServerPortNumber;
    }

    public function getHttpsPortNumber(): int
    {
        return $this->httpsPortNumber;
    }

    public function getEnableHttps(): bool
    {
        return $this->enableHttps;
    }

    public function getCertificatePath(): string
    {
        return $this->certificatePath;
    }

    public function getCertificatePassword(): string
    {
        return $this->certificatePassword;
    }

    public function getIsPortAuthorized(): bool
    {
        return $this->isPortAuthorized;
    }

    public function getAutoRunWebApp(): bool
    {
        return $this->autoRunWebApp;
    }

    public function getEnableRemoteAccess(): bool
    {
        return $this->enableRemoteAccess;
    }

    public function getLogAllQueryTimes(): bool
    {
        return $this->logAllQueryTimes;
    }

    public function getEnableCaseSensitiveItemIds(): bool
    {
        return $this->enableCaseSensitiveItemIds;
    }

    public function getMetadataPath(): string
    {
        return $this->metadataPath;
    }

    public function getMetadataNetworkPath(): string
    {
        return $this->metadataNetworkPath;
    }

    public function getPreferredMetadataLanguage(): string
    {
        return $this->preferredMetadataLanguage;
    }

    public function getMetadataCountryCode(): string
    {
        return $this->metadataCountryCode;
    }

    /**
     * @return string[]
     */
    public function getSortRemoveWords(): array
    {
        return $this->sortRemoveWords;
    }

    public function getLibraryMonitorDelay(): int
    {
        return $this->libraryMonitorDelay;
    }

    public function getEnableDashboardResponseCaching(): bool
    {
        return $this->enableDashboardResponseCaching;
    }

    public function getDashboardSourcePath(): string
    {
        return $this->dashboardSourcePath;
    }

    public function getImageSavingConvention(): ImageSavingConvention
    {
        return $this->imageSavingConvention;
    }

    public function getEnableAutomaticRestart(): bool
    {
        return $this->enableAutomaticRestart;
    }

    public function getCollectionFolderIdsMigrated(): bool
    {
        return $this->collectionFolderIdsMigrated;
    }

    public function getServerName(): string
    {
        return $this->serverName;
    }

    public function getWanDdns(): string
    {
        return $this->wanDdns;
    }

    public function getUICulture(): string
    {
        return $this->uICulture;
    }

    public function getSaveMetadataHidden(): bool
    {
        return $this->saveMetadataHidden;
    }

    public function getRemoteClientBitrateLimit(): int
    {
        return $this->remoteClientBitrateLimit;
    }

    public function getDisplaySpecialsWithinSeasons(): bool
    {
        return $this->displaySpecialsWithinSeasons;
    }

    /**
     * @return string[]
     */
    public function getLocalNetworkSubnets(): array
    {
        return $this->localNetworkSubnets;
    }

    /**
     * @return string[]
     */
    public function getLocalNetworkAddresses(): array
    {
        return $this->localNetworkAddresses;
    }

    public function getEnableExternalContentInSuggestions(): bool
    {
        return $this->enableExternalContentInSuggestions;
    }

    public function getRequireHttps(): bool
    {
        return $this->requireHttps;
    }

    public function getIsBehindProxy(): bool
    {
        return $this->isBehindProxy;
    }

    /**
     * @return string[]
     */
    public function getRemoteIPFilter(): array
    {
        return $this->remoteIPFilter;
    }

    public function getIsRemoteIPFilterBlacklist(): bool
    {
        return $this->isRemoteIPFilterBlacklist;
    }

    public function getImageExtractionTimeoutMs(): int
    {
        return $this->imageExtractionTimeoutMs;
    }

    /**
     * @return PathSubstitution[]
     */
    public function getPathSubstitutions(): array
    {
        return $this->pathSubstitutions;
    }

    /**
     * @return string[]
     */
    public function getUninstalledPlugins(): array
    {
        return $this->uninstalledPlugins;
    }

    public function getCollapseVideoFolders(): bool
    {
        return $this->collapseVideoFolders;
    }

    public function getEnableOriginalTrackTitles(): bool
    {
        return $this->enableOriginalTrackTitles;
    }

    public function getVacuumDatabaseOnStartup(): bool
    {
        return $this->vacuumDatabaseOnStartup;
    }

    public function getSimultaneousStreamLimit(): int
    {
        return $this->simultaneousStreamLimit;
    }

    public function getDatabaseCacheSizeMB(): int
    {
        return $this->databaseCacheSizeMB;
    }

    public function getEnableSqLiteMmio(): bool
    {
        return $this->enableSqLiteMmio;
    }

    public function getNextUpUpgraded(): bool
    {
        return $this->nextUpUpgraded;
    }

    public function getChannelOptionsUpgraded(): bool
    {
        return $this->channelOptionsUpgraded;
    }

    public function getTimerIdsUpgraded(): bool
    {
        return $this->timerIdsUpgraded;
    }

    public function getForcedSortNameUpgraded(): bool
    {
        return $this->forcedSortNameUpgraded;
    }

    public function getInheritedParentalRatingValueUpgraded(): bool
    {
        return $this->inheritedParentalRatingValueUpgraded;
    }

    public function getEnablePeopleLetterSubFolders(): bool
    {
        return $this->enablePeopleLetterSubFolders;
    }

    public function getOptimizeDatabaseOnShutdown(): bool
    {
        return $this->optimizeDatabaseOnShutdown;
    }

    public function getDatabaseAnalysisLimit(): int
    {
        return $this->databaseAnalysisLimit;
    }

    public function getDisableAsyncIO(): bool
    {
        return $this->disableAsyncIO;
    }

    public function getEnableDebugLevelLogging(): bool
    {
        return $this->enableDebugLevelLogging;
    }

    public function getRevertDebugLogging(): string
    {
        return $this->revertDebugLogging;
    }

    public function getEnableAutoUpdate(): bool
    {
        return $this->enableAutoUpdate;
    }

    public function getLogFileRetentionDays(): int
    {
        return $this->logFileRetentionDays;
    }

    public function getRunAtStartup(): bool
    {
        return $this->runAtStartup;
    }

    public function getIsStartupWizardCompleted(): bool
    {
        return $this->isStartupWizardCompleted;
    }

    public function getCachePath(): string
    {
        return $this->cachePath;
    }
}

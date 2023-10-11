<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.System.SystemInfo')]
class SystemInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'systemUpdateLevel     ' => Updates\PackageVersionClass::class,
        'completedInstallations' => Updates\InstallationInfo::class,
    ];

    protected Updates\PackageVersionClass $systemUpdateLevel;
    protected string $operatingSystemDisplayName;
    protected string $packageName;
    protected bool $hasPendingRestart;
    protected bool $isShuttingDown;
    protected string $operatingSystem;
    protected bool $supportsLibraryMonitor;
    protected bool $supportsLocalPortConfiguration;
    protected bool $supportsWakeServer;
    protected int $webSocketPortNumber;
    /** @var Updates\InstallationInfo[] */
    protected array $completedInstallations;
    protected bool $canSelfRestart;
    protected bool $canSelfUpdate;
    protected bool $canLaunchWebBrowser;
    protected string $programDataPath;
    protected string $itemsByNamePath;
    protected string $cachePath;
    protected string $logPath;
    protected string $internalMetadataPath;
    protected string $transcodingTempPath;
    protected int $httpServerPortNumber;
    protected bool $supportsHttps;
    protected int $httpsPortNumber;
    protected bool $hasUpdateAvailable;
    protected bool $supportsAutoRunAtStartup;
    protected bool $hardwareAccelerationRequiresPremiere;
    protected string $localAddress;
    /** @var string[] */
    protected array $localAddresses;
    protected string $wanAddress;
    /** @var string[] */
    protected array $remoteAddresses;
    protected string $serverName;
    protected string $version;
    protected string $id;

    public function getSystemUpdateLevel(): Updates\PackageVersionClass
    {
        return $this->systemUpdateLevel;
    }

    public function getOperatingSystemDisplayName(): string
    {
        return $this->operatingSystemDisplayName;
    }

    public function getPackageName(): string
    {
        return $this->packageName;
    }

    public function getHasPendingRestart(): bool
    {
        return $this->hasPendingRestart;
    }

    public function getIsShuttingDown(): bool
    {
        return $this->isShuttingDown;
    }

    public function getOperatingSystem(): string
    {
        return $this->operatingSystem;
    }

    public function getSupportsLibraryMonitor(): bool
    {
        return $this->supportsLibraryMonitor;
    }

    public function getSupportsLocalPortConfiguration(): bool
    {
        return $this->supportsLocalPortConfiguration;
    }

    public function getSupportsWakeServer(): bool
    {
        return $this->supportsWakeServer;
    }

    public function getWebSocketPortNumber(): int
    {
        return $this->webSocketPortNumber;
    }

    /**
     * @return Updates\InstallationInfo[]
     */
    public function getCompletedInstallations(): array
    {
        return $this->completedInstallations;
    }

    public function getCanSelfRestart(): bool
    {
        return $this->canSelfRestart;
    }

    public function getCanSelfUpdate(): bool
    {
        return $this->canSelfUpdate;
    }

    public function getCanLaunchWebBrowser(): bool
    {
        return $this->canLaunchWebBrowser;
    }

    public function getProgramDataPath(): string
    {
        return $this->programDataPath;
    }

    public function getItemsByNamePath(): string
    {
        return $this->itemsByNamePath;
    }

    public function getCachePath(): string
    {
        return $this->cachePath;
    }

    public function getLogPath(): string
    {
        return $this->logPath;
    }

    public function getInternalMetadataPath(): string
    {
        return $this->internalMetadataPath;
    }

    public function getTranscodingTempPath(): string
    {
        return $this->transcodingTempPath;
    }

    public function getHttpServerPortNumber(): int
    {
        return $this->httpServerPortNumber;
    }

    public function getSupportsHttps(): bool
    {
        return $this->supportsHttps;
    }

    public function getHttpsPortNumber(): int
    {
        return $this->httpsPortNumber;
    }

    public function getHasUpdateAvailable(): bool
    {
        return $this->hasUpdateAvailable;
    }

    public function getSupportsAutoRunAtStartup(): bool
    {
        return $this->supportsAutoRunAtStartup;
    }

    public function getHardwareAccelerationRequiresPremiere(): bool
    {
        return $this->hardwareAccelerationRequiresPremiere;
    }

    public function getLocalAddress(): string
    {
        return $this->localAddress;
    }

    /**
     * @return string[]
     */
    public function getLocalAddresses(): array
    {
        return $this->localAddresses;
    }

    public function getWanAddress(): string
    {
        return $this->wanAddress;
    }

    /**
     * @return string[]
     */
    public function getRemoteAddresses(): array
    {
        return $this->remoteAddresses;
    }

    public function getServerName(): string
    {
        return $this->serverName;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function getId(): string
    {
        return $this->id;
    }
}

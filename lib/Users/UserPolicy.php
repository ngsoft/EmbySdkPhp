<?php

declare(strict_types=1);

namespace EmbyClient\Model\Users;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Users.UserPolicy')]
class UserPolicy extends \EmbyClient\Model
{
    protected static array $mapping = [
        'accessSchedules  ' => \EmbyClient\Model\Configuration\AccessSchedule::class,
        'blockUnratedItems' => \EmbyClient\Model\Configuration\UnratedItem::class,
    ];

    protected bool $isAdministrator;
    protected bool $isHidden;
    protected bool $isHiddenRemotely;
    protected bool $isHiddenFromUnusedDevices;
    protected bool $isDisabled;
    protected int $maxParentalRating;
    /** @var string[] */
    protected array $blockedTags;
    protected bool $isTagBlockingModeInclusive;
    /** @var string[] */
    protected array $includeTags;
    protected bool $enableUserPreferenceAccess;
    /** @var \EmbyClient\Model\Configuration\AccessSchedule[] */
    protected array $accessSchedules;
    /** @var \EmbyClient\Model\Configuration\UnratedItem[] */
    protected array $blockUnratedItems;
    protected bool $enableRemoteControlOfOtherUsers;
    protected bool $enableSharedDeviceControl;
    protected bool $enableRemoteAccess;
    protected bool $enableLiveTvManagement;
    protected bool $enableLiveTvAccess;
    protected bool $enableMediaPlayback;
    protected bool $enableAudioPlaybackTranscoding;
    protected bool $enableVideoPlaybackTranscoding;
    protected bool $enablePlaybackRemuxing;
    protected bool $enableContentDeletion;
    /** @var string[] */
    protected array $enableContentDeletionFromFolders;
    protected bool $enableContentDownloading;
    protected bool $enableSubtitleDownloading;
    protected bool $enableSubtitleManagement;
    protected bool $enableSyncTranscoding;
    protected bool $enableMediaConversion;
    /** @var string[] */
    protected array $enabledChannels;
    protected bool $enableAllChannels;
    /** @var string[] */
    protected array $enabledFolders;
    protected bool $enableAllFolders;
    protected int $invalidLoginAttemptCount;
    protected bool $enablePublicSharing;
    /** @var string[] */
    protected array $blockedMediaFolders;
    protected int $remoteClientBitrateLimit;
    protected string $authenticationProviderId;
    /** @var string[] */
    protected array $excludedSubFolders;
    protected int $simultaneousStreamLimit;
    /** @var string[] */
    protected array $enabledDevices;
    protected bool $enableAllDevices;

    public function getIsAdministrator(): bool
    {
        return $this->isAdministrator;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function getIsHiddenRemotely(): bool
    {
        return $this->isHiddenRemotely;
    }

    public function getIsHiddenFromUnusedDevices(): bool
    {
        return $this->isHiddenFromUnusedDevices;
    }

    public function getIsDisabled(): bool
    {
        return $this->isDisabled;
    }

    public function getMaxParentalRating(): int
    {
        return $this->maxParentalRating;
    }

    /**
     * @return string[]
     */
    public function getBlockedTags(): array
    {
        return $this->blockedTags;
    }

    public function getIsTagBlockingModeInclusive(): bool
    {
        return $this->isTagBlockingModeInclusive;
    }

    /**
     * @return string[]
     */
    public function getIncludeTags(): array
    {
        return $this->includeTags;
    }

    public function getEnableUserPreferenceAccess(): bool
    {
        return $this->enableUserPreferenceAccess;
    }

    /**
     * @return \EmbyClient\Model\Configuration\AccessSchedule[]
     */
    public function getAccessSchedules(): array
    {
        return $this->accessSchedules;
    }

    /**
     * @return \EmbyClient\Model\Configuration\UnratedItem[]
     */
    public function getBlockUnratedItems(): array
    {
        return $this->blockUnratedItems;
    }

    public function getEnableRemoteControlOfOtherUsers(): bool
    {
        return $this->enableRemoteControlOfOtherUsers;
    }

    public function getEnableSharedDeviceControl(): bool
    {
        return $this->enableSharedDeviceControl;
    }

    public function getEnableRemoteAccess(): bool
    {
        return $this->enableRemoteAccess;
    }

    public function getEnableLiveTvManagement(): bool
    {
        return $this->enableLiveTvManagement;
    }

    public function getEnableLiveTvAccess(): bool
    {
        return $this->enableLiveTvAccess;
    }

    public function getEnableMediaPlayback(): bool
    {
        return $this->enableMediaPlayback;
    }

    public function getEnableAudioPlaybackTranscoding(): bool
    {
        return $this->enableAudioPlaybackTranscoding;
    }

    public function getEnableVideoPlaybackTranscoding(): bool
    {
        return $this->enableVideoPlaybackTranscoding;
    }

    public function getEnablePlaybackRemuxing(): bool
    {
        return $this->enablePlaybackRemuxing;
    }

    public function getEnableContentDeletion(): bool
    {
        return $this->enableContentDeletion;
    }

    /**
     * @return string[]
     */
    public function getEnableContentDeletionFromFolders(): array
    {
        return $this->enableContentDeletionFromFolders;
    }

    public function getEnableContentDownloading(): bool
    {
        return $this->enableContentDownloading;
    }

    public function getEnableSubtitleDownloading(): bool
    {
        return $this->enableSubtitleDownloading;
    }

    public function getEnableSubtitleManagement(): bool
    {
        return $this->enableSubtitleManagement;
    }

    public function getEnableSyncTranscoding(): bool
    {
        return $this->enableSyncTranscoding;
    }

    public function getEnableMediaConversion(): bool
    {
        return $this->enableMediaConversion;
    }

    /**
     * @return string[]
     */
    public function getEnabledChannels(): array
    {
        return $this->enabledChannels;
    }

    public function getEnableAllChannels(): bool
    {
        return $this->enableAllChannels;
    }

    /**
     * @return string[]
     */
    public function getEnabledFolders(): array
    {
        return $this->enabledFolders;
    }

    public function getEnableAllFolders(): bool
    {
        return $this->enableAllFolders;
    }

    public function getInvalidLoginAttemptCount(): int
    {
        return $this->invalidLoginAttemptCount;
    }

    public function getEnablePublicSharing(): bool
    {
        return $this->enablePublicSharing;
    }

    /**
     * @return string[]
     */
    public function getBlockedMediaFolders(): array
    {
        return $this->blockedMediaFolders;
    }

    public function getRemoteClientBitrateLimit(): int
    {
        return $this->remoteClientBitrateLimit;
    }

    public function getAuthenticationProviderId(): string
    {
        return $this->authenticationProviderId;
    }

    /**
     * @return string[]
     */
    public function getExcludedSubFolders(): array
    {
        return $this->excludedSubFolders;
    }

    public function getSimultaneousStreamLimit(): int
    {
        return $this->simultaneousStreamLimit;
    }

    /**
     * @return string[]
     */
    public function getEnabledDevices(): array
    {
        return $this->enabledDevices;
    }

    public function getEnableAllDevices(): bool
    {
        return $this->enableAllDevices;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.ClientCapabilities')]
class ClientCapabilities extends \EmbyClient\Model
{
    protected static array $mapping = [
        'deviceProfile' => Dlna\DeviceProfile::class,
    ];

    /** @var string[] */
    protected array $playableMediaTypes;
    /** @var string[] */
    protected array $supportedCommands;
    protected bool $supportsMediaControl;
    protected string $pushToken;
    protected string $pushTokenType;
    protected bool $supportsSync;
    protected Dlna\DeviceProfile $deviceProfile;
    protected string $iconUrl;
    protected string $appId;

    /**
     * @return string[]
     */
    public function getPlayableMediaTypes(): array
    {
        return $this->playableMediaTypes;
    }

    /**
     * @return string[]
     */
    public function getSupportedCommands(): array
    {
        return $this->supportedCommands;
    }

    public function getSupportsMediaControl(): bool
    {
        return $this->supportsMediaControl;
    }

    public function getPushToken(): string
    {
        return $this->pushToken;
    }

    public function getPushTokenType(): string
    {
        return $this->pushTokenType;
    }

    public function getSupportsSync(): bool
    {
        return $this->supportsSync;
    }

    public function getDeviceProfile(): Dlna\DeviceProfile
    {
        return $this->deviceProfile;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }

    public function getAppId(): string
    {
        return $this->appId;
    }
}

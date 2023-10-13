<?php

declare(strict_types=1);

namespace EmbyClient\Model\Session;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Controller.Session.SessionInfo')]
class SessionInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'playState'        => \EmbyClient\Model\PlayerStateInfo::class,
        'additionalUsers'  => \EmbyClient\Model\SessionUserInfo::class,
        'lastActivityDate' => \DateTimeImmutable::class,
        'nowPlayingItem'   => \EmbyClient\Model\BaseItemDto::class,
        'transcodingInfo'  => \EmbyClient\Model\TranscodingInfo::class,
    ];

    protected \EmbyClient\Model\PlayerStateInfo $playState;
    /** @var \EmbyClient\Model\SessionUserInfo[] */
    protected array $additionalUsers;
    protected string $remoteEndPoint;
    /** @var string[] */
    protected array $playableMediaTypes;
    protected string $playlistItemId;
    protected int $playlistIndex;
    protected int $playlistLength;
    protected string $id;
    protected string $serverId;
    protected string $userId;
    protected string $userName;
    protected string $userPrimaryImageTag;
    protected string $client;
    protected \DateTimeImmutable $lastActivityDate;
    protected string $deviceName;
    protected string $deviceType;
    protected \EmbyClient\Model\BaseItemDto $nowPlayingItem;
    protected string $deviceId;
    protected string $applicationVersion;
    protected string $appIconUrl;
    /** @var string[] */
    protected array $supportedCommands;
    protected \EmbyClient\Model\TranscodingInfo $transcodingInfo;
    protected bool $supportsRemoteControl;

    public function getPlayState(): \EmbyClient\Model\PlayerStateInfo
    {
        return $this->playState;
    }

    /**
     * @return \EmbyClient\Model\SessionUserInfo[]
     */
    public function getAdditionalUsers(): array
    {
        return $this->additionalUsers;
    }

    public function getRemoteEndPoint(): string
    {
        return $this->remoteEndPoint;
    }

    /**
     * @return string[]
     */
    public function getPlayableMediaTypes(): array
    {
        return $this->playableMediaTypes;
    }

    public function getPlaylistItemId(): string
    {
        return $this->playlistItemId;
    }

    public function getPlaylistIndex(): int
    {
        return $this->playlistIndex;
    }

    public function getPlaylistLength(): int
    {
        return $this->playlistLength;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getUserPrimaryImageTag(): string
    {
        return $this->userPrimaryImageTag;
    }

    public function getClient(): string
    {
        return $this->client;
    }

    public function getLastActivityDate(): \DateTimeImmutable
    {
        return $this->lastActivityDate;
    }

    public function getDeviceName(): string
    {
        return $this->deviceName;
    }

    public function getDeviceType(): string
    {
        return $this->deviceType;
    }

    public function getNowPlayingItem(): \EmbyClient\Model\BaseItemDto
    {
        return $this->nowPlayingItem;
    }

    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    public function getAppIconUrl(): string
    {
        return $this->appIconUrl;
    }

    /**
     * @return string[]
     */
    public function getSupportedCommands(): array
    {
        return $this->supportedCommands;
    }

    public function getTranscodingInfo(): \EmbyClient\Model\TranscodingInfo
    {
        return $this->transcodingInfo;
    }

    public function getSupportsRemoteControl(): bool
    {
        return $this->supportsRemoteControl;
    }
}

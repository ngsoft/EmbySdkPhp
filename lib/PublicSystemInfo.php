<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.System.PublicSystemInfo')]
class PublicSystemInfo extends \EmbyClient\Model
{
    protected string $localAddress;
    /** @var string[] */
    protected array $localAddresses;
    protected string $wanAddress;
    /** @var string[] */
    protected array $remoteAddresses;
    protected string $serverName;
    protected string $version;
    protected string $id;

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

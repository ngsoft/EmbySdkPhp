<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.System.WakeOnLanInfo')]
class WakeOnLanInfo extends \EmbyClient\Model
{
    protected string $macAddress;
    protected string $broadcastAddress;
    protected int $port;

    public function getMacAddress(): string
    {
        return $this->macAddress;
    }

    public function getBroadcastAddress(): string
    {
        return $this->broadcastAddress;
    }

    public function getPort(): int
    {
        return $this->port;
    }
}

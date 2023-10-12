<?php

declare(strict_types=1);

namespace EmbyClient\Model\Devices;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Devices.DeviceInfo')]
class DeviceInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dateLastActivity' => \DateTimeImmutable::class,
    ];

    protected string $name;
    protected string $id;
    protected string $lastUserName;
    protected string $appName;
    protected string $appVersion;
    protected string $lastUserId;
    protected \DateTimeImmutable $dateLastActivity;
    protected string $iconUrl;

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getLastUserName(): string
    {
        return $this->lastUserName;
    }

    public function getAppName(): string
    {
        return $this->appName;
    }

    public function getAppVersion(): string
    {
        return $this->appVersion;
    }

    public function getLastUserId(): string
    {
        return $this->lastUserId;
    }

    public function getDateLastActivity(): \DateTimeImmutable
    {
        return $this->dateLastActivity;
    }

    public function getIconUrl(): string
    {
        return $this->iconUrl;
    }
}

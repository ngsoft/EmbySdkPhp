<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.UserDto')]
class UserDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dateCreated     ' => \DateTimeImmutable::class,
        'connectLinkType ' => Connect\UserLinkType::class,
        'lastLoginDate   ' => \DateTimeImmutable::class,
        'lastActivityDate' => \DateTimeImmutable::class,
        'configuration   ' => Configuration\UserConfiguration::class,
        'policy          ' => Users\UserPolicy::class,
    ];

    protected string $name;
    protected string $serverId;
    protected string $serverName;
    protected string $prefix;
    protected string $connectUserName;
    protected \DateTimeImmutable $dateCreated;
    protected Connect\UserLinkType $connectLinkType;
    protected string $id;
    protected string $primaryImageTag;
    protected bool $hasPassword;
    protected bool $hasConfiguredPassword;
    protected bool $hasConfiguredEasyPassword;
    protected bool $enableAutoLogin;
    protected \DateTimeImmutable $lastLoginDate;
    protected \DateTimeImmutable $lastActivityDate;
    protected Configuration\UserConfiguration $configuration;
    protected Users\UserPolicy $policy;
    protected float $primaryImageAspectRatio;

    public function getName(): string
    {
        return $this->name;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getServerName(): string
    {
        return $this->serverName;
    }

    public function getPrefix(): string
    {
        return $this->prefix;
    }

    public function getConnectUserName(): string
    {
        return $this->connectUserName;
    }

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getConnectLinkType(): Connect\UserLinkType
    {
        return $this->connectLinkType;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPrimaryImageTag(): string
    {
        return $this->primaryImageTag;
    }

    public function getHasPassword(): bool
    {
        return $this->hasPassword;
    }

    public function getHasConfiguredPassword(): bool
    {
        return $this->hasConfiguredPassword;
    }

    public function getHasConfiguredEasyPassword(): bool
    {
        return $this->hasConfiguredEasyPassword;
    }

    public function getEnableAutoLogin(): bool
    {
        return $this->enableAutoLogin;
    }

    public function getLastLoginDate(): \DateTimeImmutable
    {
        return $this->lastLoginDate;
    }

    public function getLastActivityDate(): \DateTimeImmutable
    {
        return $this->lastActivityDate;
    }

    public function getConfiguration(): Configuration\UserConfiguration
    {
        return $this->configuration;
    }

    public function getPolicy(): Users\UserPolicy
    {
        return $this->policy;
    }

    public function getPrimaryImageAspectRatio(): float
    {
        return $this->primaryImageAspectRatio;
    }
}

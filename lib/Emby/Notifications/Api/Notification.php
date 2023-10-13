<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Notifications\Api;

use EmbyClient\RefName;

#[RefName('Emby.Notifications.Api.Notification')]
class Notification extends \EmbyClient\Model
{
    protected static array $mapping = [
        'date'  => \DateTimeImmutable::class,
        'level' => \EmbyClient\Model\Notifications\NotificationLevel::class,
    ];

    protected string $id;
    protected string $userId;
    protected \DateTimeImmutable $date;
    protected bool $isRead;
    protected string $name;
    protected string $description;
    protected string $url;
    protected \EmbyClient\Model\Notifications\NotificationLevel $level;

    public function getId(): string
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function isRead(): bool
    {
        return $this->isRead;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getLevel(): \EmbyClient\Model\Notifications\NotificationLevel
    {
        return $this->level;
    }
}

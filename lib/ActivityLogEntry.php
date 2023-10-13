<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Activity.ActivityLogEntry')]
class ActivityLogEntry extends \EmbyClient\Model
{
    protected static array $mapping = [
        'date'     => \DateTimeImmutable::class,
        'severity' => Logging\LogSeverity::class,
    ];

    protected int $id;
    protected string $name;
    protected string $overview;
    protected string $shortOverview;
    protected string $type;
    protected string $itemId;
    protected \DateTimeImmutable $date;
    protected string $userId;
    protected string $userPrimaryImageTag;
    protected Logging\LogSeverity $severity;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function getShortOverview(): string
    {
        return $this->shortOverview;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getUserPrimaryImageTag(): string
    {
        return $this->userPrimaryImageTag;
    }

    public function getSeverity(): Logging\LogSeverity
    {
        return $this->severity;
    }
}

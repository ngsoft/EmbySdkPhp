<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.UserItemDataDto')]
class UserItemDataDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'lastPlayedDate' => \DateTimeImmutable::class,
    ];

    protected float $rating;
    protected float $playedPercentage;
    protected int $unplayedItemCount;
    protected int $playbackPositionTicks;
    protected int $playCount;
    protected bool $isFavorite;
    protected \DateTimeImmutable $lastPlayedDate;
    protected bool $played;
    protected string $key;
    protected string $itemId;
    protected string $serverId;

    public function getRating(): float
    {
        return $this->rating;
    }

    public function getPlayedPercentage(): float
    {
        return $this->playedPercentage;
    }

    public function getUnplayedItemCount(): int
    {
        return $this->unplayedItemCount;
    }

    public function getPlaybackPositionTicks(): int
    {
        return $this->playbackPositionTicks;
    }

    public function getPlayCount(): int
    {
        return $this->playCount;
    }

    public function getIsFavorite(): bool
    {
        return $this->isFavorite;
    }

    public function getLastPlayedDate(): \DateTimeImmutable
    {
        return $this->lastPlayedDate;
    }

    public function getPlayed(): bool
    {
        return $this->played;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }
}

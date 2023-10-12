<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Sync.SyncJob')]
class SyncJob extends \EmbyClient\Model
{
    protected static array $mapping = [
        'category        ' => SyncCategory::class,
        'status          ' => SyncJobStatus::class,
        'dateCreated     ' => \DateTimeImmutable::class,
        'dateLastModified' => \DateTimeImmutable::class,
    ];

    protected int $id;
    protected string $targetId;
    protected string $targetName;
    protected string $quality;
    protected int $bitrate;
    protected string $container;
    protected string $videoCodec;
    protected string $audioCodec;
    protected string $profile;
    protected SyncCategory $category;
    protected int $parentId;
    protected float $progress;
    protected string $name;
    protected SyncJobStatus $status;
    protected int $userId;
    protected bool $unwatchedOnly;
    protected bool $syncNewContent;
    protected int $itemLimit;
    /** @var int[] */
    protected array $requestedItemIds;
    protected \DateTimeImmutable $dateCreated;
    protected \DateTimeImmutable $dateLastModified;
    protected int $itemCount;
    protected string $parentName;
    protected string $primaryImageItemId;
    protected string $primaryImageTag;

    public function getId(): int
    {
        return $this->id;
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    public function getTargetName(): string
    {
        return $this->targetName;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getVideoCodec(): string
    {
        return $this->videoCodec;
    }

    public function getAudioCodec(): string
    {
        return $this->audioCodec;
    }

    public function getProfile(): string
    {
        return $this->profile;
    }

    public function getCategory(): SyncCategory
    {
        return $this->category;
    }

    public function getParentId(): int
    {
        return $this->parentId;
    }

    public function getProgress(): float
    {
        return $this->progress;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStatus(): SyncJobStatus
    {
        return $this->status;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUnwatchedOnly(): bool
    {
        return $this->unwatchedOnly;
    }

    public function getSyncNewContent(): bool
    {
        return $this->syncNewContent;
    }

    public function getItemLimit(): int
    {
        return $this->itemLimit;
    }

    /**
     * @return int[]
     */
    public function getRequestedItemIds(): array
    {
        return $this->requestedItemIds;
    }

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getDateLastModified(): \DateTimeImmutable
    {
        return $this->dateLastModified;
    }

    public function getItemCount(): int
    {
        return $this->itemCount;
    }

    public function getParentName(): string
    {
        return $this->parentName;
    }

    public function getPrimaryImageItemId(): string
    {
        return $this->primaryImageItemId;
    }

    public function getPrimaryImageTag(): string
    {
        return $this->primaryImageTag;
    }
}

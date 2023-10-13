<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncJobItem')]
class SyncJobItem extends \EmbyClient\Model
{
    protected static array $mapping = [
        'mediaSource'     => \EmbyClient\Model\MediaSourceInfo::class,
        'status'          => SyncJobItemStatus::class,
        'dateCreated'     => \DateTimeImmutable::class,
        'additionalFiles' => ItemFileInfo::class,
    ];

    protected int $id;
    protected int $jobId;
    protected int $itemId;
    protected string $itemName;
    protected string $mediaSourceId;
    protected \EmbyClient\Model\MediaSourceInfo $mediaSource;
    protected string $targetId;
    protected string $outputPath;
    protected SyncJobItemStatus $status;
    protected float $progress;
    protected \DateTimeImmutable $dateCreated;
    protected string $primaryImageItemId;
    protected string $primaryImageTag;
    protected string $temporaryPath;
    /** @var ItemFileInfo[] */
    protected array $additionalFiles;
    protected int $itemDateModifiedTicks;

    public function getId(): int
    {
        return $this->id;
    }

    public function getJobId(): int
    {
        return $this->jobId;
    }

    public function getItemId(): int
    {
        return $this->itemId;
    }

    public function getItemName(): string
    {
        return $this->itemName;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getMediaSource(): \EmbyClient\Model\MediaSourceInfo
    {
        return $this->mediaSource;
    }

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    public function getOutputPath(): string
    {
        return $this->outputPath;
    }

    public function getStatus(): SyncJobItemStatus
    {
        return $this->status;
    }

    public function getProgress(): float
    {
        return $this->progress;
    }

    public function getDateCreated(): \DateTimeImmutable
    {
        return $this->dateCreated;
    }

    public function getPrimaryImageItemId(): string
    {
        return $this->primaryImageItemId;
    }

    public function getPrimaryImageTag(): string
    {
        return $this->primaryImageTag;
    }

    public function getTemporaryPath(): string
    {
        return $this->temporaryPath;
    }

    /**
     * @return ItemFileInfo[]
     */
    public function getAdditionalFiles(): array
    {
        return $this->additionalFiles;
    }

    public function getItemDateModifiedTicks(): int
    {
        return $this->itemDateModifiedTicks;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.Sync.Model.SyncJobRequest')]
class SyncJobRequest extends \EmbyClient\Model
{
    protected static array $mapping = [
        'category' => \EmbyClient\Model\Sync\SyncCategory::class,
    ];

    protected string $targetId;
    /** @var string[] */
    protected array $itemIds;
    protected \EmbyClient\Model\Sync\SyncCategory $category;
    protected string $parentId;
    protected string $quality;
    protected string $profile;
    protected string $container;
    protected string $videoCodec;
    protected string $audioCodec;
    protected string $name;
    protected string $userId;
    protected bool $unwatchedOnly;
    protected bool $syncNewContent;
    protected int $itemLimit;
    protected int $bitrate;
    protected bool $downloaded;

    public function getTargetId(): string
    {
        return $this->targetId;
    }

    /**
     * @return string[]
     */
    public function getItemIds(): array
    {
        return $this->itemIds;
    }

    public function getCategory(): \EmbyClient\Model\Sync\SyncCategory
    {
        return $this->category;
    }

    public function getParentId(): string
    {
        return $this->parentId;
    }

    public function getQuality(): string
    {
        return $this->quality;
    }

    public function getProfile(): string
    {
        return $this->profile;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function getUserId(): string
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

    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    public function getDownloaded(): bool
    {
        return $this->downloaded;
    }
}

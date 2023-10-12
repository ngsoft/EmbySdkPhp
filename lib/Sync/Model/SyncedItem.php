<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncedItem')]
class SyncedItem extends \EmbyClient\Model
{
    protected static array $mapping = [
        'syncJobDateCreated' => \DateTimeImmutable::class,
        'item              ' => \EmbyClient\Model\BaseItemDto::class,
        'additionalFiles   ' => ItemFileInfo::class,
    ];

    protected string $serverId;
    protected int $syncJobId;
    protected string $syncJobName;
    protected \DateTimeImmutable $syncJobDateCreated;
    protected int $syncJobItemId;
    protected string $originalFileName;
    protected \EmbyClient\Model\BaseItemDto $item;
    protected string $userId;
    /** @var ItemFileInfo[] */
    protected array $additionalFiles;

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getSyncJobId(): int
    {
        return $this->syncJobId;
    }

    public function getSyncJobName(): string
    {
        return $this->syncJobName;
    }

    public function getSyncJobDateCreated(): \DateTimeImmutable
    {
        return $this->syncJobDateCreated;
    }

    public function getSyncJobItemId(): int
    {
        return $this->syncJobItemId;
    }

    public function getOriginalFileName(): string
    {
        return $this->originalFileName;
    }

    public function getItem(): \EmbyClient\Model\BaseItemDto
    {
        return $this->item;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return ItemFileInfo[]
     */
    public function getAdditionalFiles(): array
    {
        return $this->additionalFiles;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncedItemProgress')]
class SyncedItemProgress extends \EmbyClient\Model
{
    protected static array $mapping = [
        'status' => SyncJobItemStatus::class,
    ];

    protected float $progress;
    protected SyncJobItemStatus $status;

    public function getProgress(): float
    {
        return $this->progress;
    }

    public function getStatus(): SyncJobItemStatus
    {
        return $this->status;
    }
}

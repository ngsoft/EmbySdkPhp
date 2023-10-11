<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.Sync.Model.SyncJobCreationResult')]
class SyncJobCreationResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'job     ' => \EmbyClient\Model\Sync\SyncJob::class,
        'jobItems' => SyncJobItem::class,
    ];

    protected \EmbyClient\Model\Sync\SyncJob $job;
    /** @var SyncJobItem[] */
    protected array $jobItems;

    public function getJob(): \EmbyClient\Model\Sync\SyncJob
    {
        return $this->job;
    }

    /**
     * @return SyncJobItem[]
     */
    public function getJobItems(): array
    {
        return $this->jobItems;
    }
}

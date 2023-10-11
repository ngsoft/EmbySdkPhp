<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\Sync;

class SyncJob extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\Sync\SyncJob::class,
    ];

    /** @var \EmbyClient\Model\Sync\SyncJob[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\Sync\SyncJob[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotalRecordCount(): int
    {
        return $this->totalRecordCount;
    }
}

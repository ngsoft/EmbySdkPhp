<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\Sync\Model;

class SyncJobItem extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\Sync\Model\SyncJobItem::class,
    ];

    /** @var \EmbyClient\Model\Sync\Model\SyncJobItem[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\Sync\Model\SyncJobItem[]
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

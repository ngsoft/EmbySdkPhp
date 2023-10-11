<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class ActivityLogEntry extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\ActivityLogEntry::class,
    ];

    /** @var \EmbyClient\Model\ActivityLogEntry[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\ActivityLogEntry[]
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

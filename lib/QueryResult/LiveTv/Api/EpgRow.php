<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\LiveTv\Api;

class EpgRow extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\LiveTv\Api\EpgRow::class,
    ];

    /** @var \EmbyClient\Model\LiveTv\Api\EpgRow[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\LiveTv\Api\EpgRow[]
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

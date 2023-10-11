<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\LiveTV\Api;

class EpgRow extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\LiveTV\Api\EpgRow::class,
    ];

    /** @var \EmbyClient\Model\LiveTV\Api\EpgRow[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\LiveTV\Api\EpgRow[]
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

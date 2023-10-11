<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class LogFile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\LogFile::class,
    ];

    /** @var \EmbyClient\Model\LogFile[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\LogFile[]
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

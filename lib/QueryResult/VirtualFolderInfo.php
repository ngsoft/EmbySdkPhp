<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class VirtualFolderInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\VirtualFolderInfo::class,
    ];

    /** @var \EmbyClient\Model\VirtualFolderInfo[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\VirtualFolderInfo[]
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

<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class BaseItemDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\BaseItemDto::class,
    ];

    /** @var \EmbyClient\Model\BaseItemDto[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\BaseItemDto[]
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

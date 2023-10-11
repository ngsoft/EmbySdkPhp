<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\UserLibrary;

class TagItem extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\UserLibrary\TagItem::class,
    ];

    /** @var \EmbyClient\Model\UserLibrary\TagItem[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\UserLibrary\TagItem[]
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

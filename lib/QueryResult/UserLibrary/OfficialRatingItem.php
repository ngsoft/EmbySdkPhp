<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\UserLibrary;

class OfficialRatingItem extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\UserLibrary\OfficialRatingItem::class,
    ];

    /** @var \EmbyClient\Model\UserLibrary\OfficialRatingItem[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\UserLibrary\OfficialRatingItem[]
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

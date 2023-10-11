<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Querying.ThemeMediaResult')]
class ThemeMediaResult extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => BaseItemDto::class,
    ];

    protected int $ownerId;
    /** @var BaseItemDto[] */
    protected array $items;
    protected int $totalRecordCount;

    public function getOwnerId(): int
    {
        return $this->ownerId;
    }

    /**
     * @return BaseItemDto[]
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

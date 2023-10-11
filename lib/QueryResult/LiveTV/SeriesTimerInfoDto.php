<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\LiveTv;

class SeriesTimerInfoDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\LiveTv\SeriesTimerInfoDto::class,
    ];

    /** @var \EmbyClient\Model\LiveTv\SeriesTimerInfoDto[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\LiveTv\SeriesTimerInfoDto[]
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

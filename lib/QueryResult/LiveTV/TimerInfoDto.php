<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\LiveTv;

class TimerInfoDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\LiveTv\TimerInfoDto::class,
    ];

    /** @var \EmbyClient\Model\LiveTv\TimerInfoDto[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\LiveTv\TimerInfoDto[]
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

<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\Emby\LiveTV;

class ChannelManagementInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\Emby\LiveTV\ChannelManagementInfo::class,
    ];

    /** @var \EmbyClient\Model\Emby\LiveTV\ChannelManagementInfo[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\Emby\LiveTV\ChannelManagementInfo[]
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

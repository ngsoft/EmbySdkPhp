<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult\Devices;

class DeviceInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\Devices\DeviceInfo::class,
    ];

    /** @var \EmbyClient\Model\Devices\DeviceInfo[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\Devices\DeviceInfo[]
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

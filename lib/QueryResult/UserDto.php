<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class UserDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'items' => \EmbyClient\Model\UserDto::class,
    ];

    /** @var \EmbyClient\Model\UserDto[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return \EmbyClient\Model\UserDto[]
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

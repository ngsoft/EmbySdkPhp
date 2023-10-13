<?php

declare(strict_types=1);

namespace EmbyClient\Model\QueryResult;

class Strings extends \EmbyClient\Model
{
    /** @var string[] */
    protected array $items;
    protected int $totalRecordCount;

    /**
     * @return string[]
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

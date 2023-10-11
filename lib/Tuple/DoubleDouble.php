<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tuple;

class DoubleDouble extends \EmbyClient\Model
{
    protected float $item1;
    protected float $item2;

    public function getItem1(): float
    {
        return $this->item1;
    }

    public function getItem2(): float
    {
        return $this->item2;
    }
}

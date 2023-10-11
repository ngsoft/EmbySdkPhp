<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.AccessSchedule')]
class AccessSchedule extends \EmbyClient\Model
{
    protected static array $mapping = [
        'dayOfWeek' => DynamicDayOfWeek::class,
    ];

    protected DynamicDayOfWeek $dayOfWeek;
    protected float $startHour;
    protected float $endHour;

    public function getDayOfWeek(): DynamicDayOfWeek
    {
        return $this->dayOfWeek;
    }

    public function getStartHour(): float
    {
        return $this->startHour;
    }

    public function getEndHour(): float
    {
        return $this->endHour;
    }
}

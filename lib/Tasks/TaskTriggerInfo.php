<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Tasks.TaskTriggerInfo')]
class TaskTriggerInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'systemEvent' => SystemEvent::class,
        'dayOfWeek  ' => \EmbyClient\Model\DayOfWeek::class,
    ];

    protected string $type;
    protected int $timeOfDayTicks;
    protected int $intervalTicks;
    protected SystemEvent $systemEvent;
    protected \EmbyClient\Model\DayOfWeek $dayOfWeek;
    protected int $maxRuntimeTicks;

    public function getType(): string
    {
        return $this->type;
    }

    public function getTimeOfDayTicks(): int
    {
        return $this->timeOfDayTicks;
    }

    public function getIntervalTicks(): int
    {
        return $this->intervalTicks;
    }

    public function getSystemEvent(): SystemEvent
    {
        return $this->systemEvent;
    }

    public function getDayOfWeek(): \EmbyClient\Model\DayOfWeek
    {
        return $this->dayOfWeek;
    }

    public function getMaxRuntimeTicks(): int
    {
        return $this->maxRuntimeTicks;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.GuideInfo')]
class GuideInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'startDate' => \DateTimeImmutable::class,
        'endDate'   => \DateTimeImmutable::class,
    ];

    protected \DateTimeImmutable $startDate;
    protected \DateTimeImmutable $endDate;

    public function getStartDate(): \DateTimeImmutable
    {
        return $this->startDate;
    }

    public function getEndDate(): \DateTimeImmutable
    {
        return $this->endDate;
    }
}

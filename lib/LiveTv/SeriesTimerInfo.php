<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Controller.LiveTv.SeriesTimerInfo')]
class SeriesTimerInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'startDate  ' => \DateTimeImmutable::class,
        'endDate    ' => \DateTimeImmutable::class,
        'keepUntil  ' => KeepUntil::class,
        'days       ' => \EmbyClient\Model\DayOfWeek::class,
        'providerIds' => \EmbyClient\Model\ProviderIdDictionary::class,
        'keywords   ' => KeywordInfo::class,
        'timerType  ' => TimerType::class,
    ];

    protected string $id;
    protected string $channelId;
    /** @var string[] */
    protected array $channelIds;
    protected string $programId;
    protected string $name;
    protected string $serviceName;
    protected string $overview;
    protected \DateTimeImmutable $startDate;
    protected \DateTimeImmutable $endDate;
    protected bool $recordAnyTime;
    protected int $keepUpTo;
    protected KeepUntil $keepUntil;
    protected bool $skipEpisodesInLibrary;
    protected bool $recordNewOnly;
    /** @var \EmbyClient\Model\DayOfWeek[] */
    protected array $days;
    protected int $priority;
    protected int $prePaddingSeconds;
    protected int $postPaddingSeconds;
    protected bool $isPrePaddingRequired;
    protected bool $isPostPaddingRequired;
    protected string $seriesId;
    protected \EmbyClient\Model\ProviderIdDictionary $providerIds;
    protected int $maxRecordingSeconds;
    /** @var KeywordInfo[] */
    protected array $keywords;
    protected TimerType $timerType;

    public function getId(): string
    {
        return $this->id;
    }

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    /**
     * @return string[]
     */
    public function getChannelIds(): array
    {
        return $this->channelIds;
    }

    public function getProgramId(): string
    {
        return $this->programId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getServiceName(): string
    {
        return $this->serviceName;
    }

    public function getOverview(): string
    {
        return $this->overview;
    }

    public function getStartDate(): \DateTimeImmutable
    {
        return $this->startDate;
    }

    public function getEndDate(): \DateTimeImmutable
    {
        return $this->endDate;
    }

    public function getRecordAnyTime(): bool
    {
        return $this->recordAnyTime;
    }

    public function getKeepUpTo(): int
    {
        return $this->keepUpTo;
    }

    public function getKeepUntil(): KeepUntil
    {
        return $this->keepUntil;
    }

    public function getSkipEpisodesInLibrary(): bool
    {
        return $this->skipEpisodesInLibrary;
    }

    public function getRecordNewOnly(): bool
    {
        return $this->recordNewOnly;
    }

    /**
     * @return \EmbyClient\Model\DayOfWeek[]
     */
    public function getDays(): array
    {
        return $this->days;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getPrePaddingSeconds(): int
    {
        return $this->prePaddingSeconds;
    }

    public function getPostPaddingSeconds(): int
    {
        return $this->postPaddingSeconds;
    }

    public function getIsPrePaddingRequired(): bool
    {
        return $this->isPrePaddingRequired;
    }

    public function getIsPostPaddingRequired(): bool
    {
        return $this->isPostPaddingRequired;
    }

    public function getSeriesId(): string
    {
        return $this->seriesId;
    }

    public function getProviderIds(): \EmbyClient\Model\ProviderIdDictionary
    {
        return $this->providerIds;
    }

    public function getMaxRecordingSeconds(): int
    {
        return $this->maxRecordingSeconds;
    }

    /**
     * @return KeywordInfo[]
     */
    public function getKeywords(): array
    {
        return $this->keywords;
    }

    public function getTimerType(): TimerType
    {
        return $this->timerType;
    }
}

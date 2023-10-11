<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.LiveTv.SeriesTimerInfoDto')]
class SeriesTimerInfoDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'days     ' => \EmbyClient\Model\DayOfWeek::class,
        'keywords ' => KeywordInfo::class,
        'timerType' => TimerType::class,
        'startDate' => \DateTimeImmutable::class,
        'endDate  ' => \DateTimeImmutable::class,
        'keepUntil' => KeepUntil::class,
    ];

    protected bool $recordAnyTime;
    protected bool $skipEpisodesInLibrary;
    protected bool $recordAnyChannel;
    protected int $keepUpTo;
    protected int $maxRecordingSeconds;
    protected bool $recordNewOnly;
    /** @var string[] */
    protected array $channelIds;
    /** @var \EmbyClient\Model\DayOfWeek[] */
    protected array $days;
    protected object $imageTags;
    protected string $parentThumbItemId;
    protected string $parentThumbImageTag;
    protected string $parentPrimaryImageItemId;
    protected string $parentPrimaryImageTag;
    protected string $seriesId;
    /** @var KeywordInfo[] */
    protected array $keywords;
    protected TimerType $timerType;
    protected string $id;
    protected string $type;
    protected string $serverId;
    protected string $channelId;
    protected string $channelName;
    protected string $channelPrimaryImageTag;
    protected string $programId;
    protected string $name;
    protected string $overview;
    protected \DateTimeImmutable $startDate;
    protected \DateTimeImmutable $endDate;
    protected int $priority;
    protected int $prePaddingSeconds;
    protected int $postPaddingSeconds;
    protected bool $isPrePaddingRequired;
    protected string $parentBackdropItemId;
    /** @var string[] */
    protected array $parentBackdropImageTags;
    protected bool $isPostPaddingRequired;
    protected KeepUntil $keepUntil;

    public function getRecordAnyTime(): bool
    {
        return $this->recordAnyTime;
    }

    public function getSkipEpisodesInLibrary(): bool
    {
        return $this->skipEpisodesInLibrary;
    }

    public function getRecordAnyChannel(): bool
    {
        return $this->recordAnyChannel;
    }

    public function getKeepUpTo(): int
    {
        return $this->keepUpTo;
    }

    public function getMaxRecordingSeconds(): int
    {
        return $this->maxRecordingSeconds;
    }

    public function getRecordNewOnly(): bool
    {
        return $this->recordNewOnly;
    }

    /**
     * @return string[]
     */
    public function getChannelIds(): array
    {
        return $this->channelIds;
    }

    /**
     * @return \EmbyClient\Model\DayOfWeek[]
     */
    public function getDays(): array
    {
        return $this->days;
    }

    public function getImageTags(): object
    {
        return $this->imageTags;
    }

    public function getParentThumbItemId(): string
    {
        return $this->parentThumbItemId;
    }

    public function getParentThumbImageTag(): string
    {
        return $this->parentThumbImageTag;
    }

    public function getParentPrimaryImageItemId(): string
    {
        return $this->parentPrimaryImageItemId;
    }

    public function getParentPrimaryImageTag(): string
    {
        return $this->parentPrimaryImageTag;
    }

    public function getSeriesId(): string
    {
        return $this->seriesId;
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

    public function getId(): string
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getChannelId(): string
    {
        return $this->channelId;
    }

    public function getChannelName(): string
    {
        return $this->channelName;
    }

    public function getChannelPrimaryImageTag(): string
    {
        return $this->channelPrimaryImageTag;
    }

    public function getProgramId(): string
    {
        return $this->programId;
    }

    public function getName(): string
    {
        return $this->name;
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

    public function getParentBackdropItemId(): string
    {
        return $this->parentBackdropItemId;
    }

    /**
     * @return string[]
     */
    public function getParentBackdropImageTags(): array
    {
        return $this->parentBackdropImageTags;
    }

    public function getIsPostPaddingRequired(): bool
    {
        return $this->isPostPaddingRequired;
    }

    public function getKeepUntil(): KeepUntil
    {
        return $this->keepUntil;
    }
}

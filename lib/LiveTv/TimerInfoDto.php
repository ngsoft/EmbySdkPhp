<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.TimerInfoDto')]
class TimerInfoDto extends \EmbyClient\Model
{
    protected static array $mapping = [
        'status'      => RecordingStatus::class,
        'programInfo' => \EmbyClient\Model\BaseItemDto::class,
        'timerType'   => TimerType::class,
        'startDate'   => \DateTimeImmutable::class,
        'endDate'     => \DateTimeImmutable::class,
        'keepUntil'   => KeepUntil::class,
    ];

    protected RecordingStatus $status;
    protected string $seriesTimerId;
    protected int $runTimeTicks;
    protected \EmbyClient\Model\BaseItemDto $programInfo;
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

    public function getStatus(): RecordingStatus
    {
        return $this->status;
    }

    public function getSeriesTimerId(): string
    {
        return $this->seriesTimerId;
    }

    public function getRunTimeTicks(): int
    {
        return $this->runTimeTicks;
    }

    public function getProgramInfo(): \EmbyClient\Model\BaseItemDto
    {
        return $this->programInfo;
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

    public function isPrePaddingRequired(): bool
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

    public function isPostPaddingRequired(): bool
    {
        return $this->isPostPaddingRequired;
    }

    public function getKeepUntil(): KeepUntil
    {
        return $this->keepUntil;
    }
}

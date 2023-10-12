<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.PlaybackProgressInfo')]
class PlaybackProgressInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'item           ' => BaseItemDto::class,
        'nowPlayingQueue' => QueueItem::class,
        'eventName      ' => ProgressEvent::class,
        'playMethod     ' => PlayMethod::class,
        'repeatMode     ' => RepeatMode::class,
    ];

    protected bool $canSeek;
    protected BaseItemDto $item;
    /** @var QueueItem[] */
    protected array $nowPlayingQueue;
    protected string $playlistItemId;
    protected string $itemId;
    protected string $sessionId;
    protected string $mediaSourceId;
    protected int $audioStreamIndex;
    protected int $subtitleStreamIndex;
    protected bool $isPaused;
    protected int $playlistIndex;
    protected int $playlistLength;
    protected bool $isMuted;
    protected int $positionTicks;
    protected int $runTimeTicks;
    protected int $playbackStartTimeTicks;
    protected int $volumeLevel;
    protected int $brightness;
    protected string $aspectRatio;
    protected ProgressEvent $eventName;
    protected PlayMethod $playMethod;
    protected string $liveStreamId;
    protected string $playSessionId;
    protected RepeatMode $repeatMode;
    protected int $subtitleOffset;
    protected float $playbackRate;
    /** @var string[] */
    protected array $playlistItemIds;

    public function getCanSeek(): bool
    {
        return $this->canSeek;
    }

    public function getItem(): BaseItemDto
    {
        return $this->item;
    }

    /**
     * @return QueueItem[]
     */
    public function getNowPlayingQueue(): array
    {
        return $this->nowPlayingQueue;
    }

    public function getPlaylistItemId(): string
    {
        return $this->playlistItemId;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getAudioStreamIndex(): int
    {
        return $this->audioStreamIndex;
    }

    public function getSubtitleStreamIndex(): int
    {
        return $this->subtitleStreamIndex;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function getPlaylistIndex(): int
    {
        return $this->playlistIndex;
    }

    public function getPlaylistLength(): int
    {
        return $this->playlistLength;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getPositionTicks(): int
    {
        return $this->positionTicks;
    }

    public function getRunTimeTicks(): int
    {
        return $this->runTimeTicks;
    }

    public function getPlaybackStartTimeTicks(): int
    {
        return $this->playbackStartTimeTicks;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function getBrightness(): int
    {
        return $this->brightness;
    }

    public function getAspectRatio(): string
    {
        return $this->aspectRatio;
    }

    public function getEventName(): ProgressEvent
    {
        return $this->eventName;
    }

    public function getPlayMethod(): PlayMethod
    {
        return $this->playMethod;
    }

    public function getLiveStreamId(): string
    {
        return $this->liveStreamId;
    }

    public function getPlaySessionId(): string
    {
        return $this->playSessionId;
    }

    public function getRepeatMode(): RepeatMode
    {
        return $this->repeatMode;
    }

    public function getSubtitleOffset(): int
    {
        return $this->subtitleOffset;
    }

    public function getPlaybackRate(): float
    {
        return $this->playbackRate;
    }

    /**
     * @return string[]
     */
    public function getPlaylistItemIds(): array
    {
        return $this->playlistItemIds;
    }
}

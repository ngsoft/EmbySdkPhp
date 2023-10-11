<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.PlayerStateInfo')]
class PlayerStateInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'playMethod' => PlayMethod::class,
        'repeatMode' => RepeatMode::class,
    ];

    protected int $positionTicks;
    protected bool $canSeek;
    protected bool $isPaused;
    protected bool $isMuted;
    protected int $volumeLevel;
    protected int $audioStreamIndex;
    protected int $subtitleStreamIndex;
    protected string $mediaSourceId;
    protected PlayMethod $playMethod;
    protected RepeatMode $repeatMode;
    protected int $subtitleOffset;
    protected float $playbackRate;

    public function getPositionTicks(): int
    {
        return $this->positionTicks;
    }

    public function getCanSeek(): bool
    {
        return $this->canSeek;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function getIsMuted(): bool
    {
        return $this->isMuted;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function getAudioStreamIndex(): int
    {
        return $this->audioStreamIndex;
    }

    public function getSubtitleStreamIndex(): int
    {
        return $this->subtitleStreamIndex;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getPlayMethod(): PlayMethod
    {
        return $this->playMethod;
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
}

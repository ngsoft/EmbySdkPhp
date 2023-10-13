<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.PlaybackInfoRequest')]
class PlaybackInfoRequest extends \EmbyClient\Model
{
    protected static array $mapping = [
        'deviceProfile'       => \EmbyClient\Model\Dlna\DeviceProfile::class,
        'directPlayProtocols' => MediaProtocol::class,
    ];

    protected string $id;
    protected string $userId;
    protected int $maxStreamingBitrate;
    protected int $startTimeTicks;
    protected int $audioStreamIndex;
    protected int $subtitleStreamIndex;
    protected int $maxAudioChannels;
    protected string $mediaSourceId;
    protected string $liveStreamId;
    protected \EmbyClient\Model\Dlna\DeviceProfile $deviceProfile;
    protected bool $enableDirectPlay;
    protected bool $enableDirectStream;
    protected bool $enableTranscoding;
    protected bool $allowInterlacedVideoStreamCopy;
    protected bool $allowVideoStreamCopy;
    protected bool $allowAudioStreamCopy;
    protected bool $isPlayback;
    protected bool $autoOpenLiveStream;
    /** @var MediaProtocol[] */
    protected array $directPlayProtocols;
    protected string $currentPlaySessionId;

    public function getId(): string
    {
        return $this->id;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getMaxStreamingBitrate(): int
    {
        return $this->maxStreamingBitrate;
    }

    public function getStartTimeTicks(): int
    {
        return $this->startTimeTicks;
    }

    public function getAudioStreamIndex(): int
    {
        return $this->audioStreamIndex;
    }

    public function getSubtitleStreamIndex(): int
    {
        return $this->subtitleStreamIndex;
    }

    public function getMaxAudioChannels(): int
    {
        return $this->maxAudioChannels;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getLiveStreamId(): string
    {
        return $this->liveStreamId;
    }

    public function getDeviceProfile(): \EmbyClient\Model\Dlna\DeviceProfile
    {
        return $this->deviceProfile;
    }

    public function getEnableDirectPlay(): bool
    {
        return $this->enableDirectPlay;
    }

    public function getEnableDirectStream(): bool
    {
        return $this->enableDirectStream;
    }

    public function getEnableTranscoding(): bool
    {
        return $this->enableTranscoding;
    }

    public function getAllowInterlacedVideoStreamCopy(): bool
    {
        return $this->allowInterlacedVideoStreamCopy;
    }

    public function getAllowVideoStreamCopy(): bool
    {
        return $this->allowVideoStreamCopy;
    }

    public function getAllowAudioStreamCopy(): bool
    {
        return $this->allowAudioStreamCopy;
    }

    public function isPlayback(): bool
    {
        return $this->isPlayback;
    }

    public function getAutoOpenLiveStream(): bool
    {
        return $this->autoOpenLiveStream;
    }

    /**
     * @return MediaProtocol[]
     */
    public function getDirectPlayProtocols(): array
    {
        return $this->directPlayProtocols;
    }

    public function getCurrentPlaySessionId(): string
    {
        return $this->currentPlaySessionId;
    }
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.LiveStreamRequest')]
class LiveStreamRequest extends \EmbyClient\Model
{
    protected static array $mapping = [
        'deviceProfile'       => \EmbyClient\Model\Dlna\DeviceProfile::class,
        'directPlayProtocols' => MediaProtocol::class,
    ];

    protected string $openToken;
    protected string $userId;
    protected string $playSessionId;
    protected int $maxStreamingBitrate;
    protected int $startTimeTicks;
    protected int $audioStreamIndex;
    protected int $subtitleStreamIndex;
    protected int $maxAudioChannels;
    protected int $itemId;
    protected \EmbyClient\Model\Dlna\DeviceProfile $deviceProfile;
    protected bool $enableDirectPlay;
    protected bool $enableDirectStream;
    protected bool $enableTranscoding;
    protected bool $allowVideoStreamCopy;
    protected bool $allowInterlacedVideoStreamCopy;
    protected bool $allowAudioStreamCopy;
    /** @var MediaProtocol[] */
    protected array $directPlayProtocols;

    public function getOpenToken(): string
    {
        return $this->openToken;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getPlaySessionId(): string
    {
        return $this->playSessionId;
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

    public function getItemId(): int
    {
        return $this->itemId;
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

    public function getAllowVideoStreamCopy(): bool
    {
        return $this->allowVideoStreamCopy;
    }

    public function getAllowInterlacedVideoStreamCopy(): bool
    {
        return $this->allowInterlacedVideoStreamCopy;
    }

    public function getAllowAudioStreamCopy(): bool
    {
        return $this->allowAudioStreamCopy;
    }

    /**
     * @return MediaProtocol[]
     */
    public function getDirectPlayProtocols(): array
    {
        return $this->directPlayProtocols;
    }
}

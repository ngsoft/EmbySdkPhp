<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.TranscodingInfo')]
class TranscodingInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'transcodeReasons'  => TranscodeReason::class,
        'cpuHistory'        => Tuple\DoubleDouble::class,
        'videoPipelineInfo' => Transcoding\VpStepInfo::class,
    ];

    protected string $audioCodec;
    protected string $videoCodec;
    protected string $subProtocol;
    protected string $container;
    protected bool $isVideoDirect;
    protected bool $isAudioDirect;
    protected int $bitrate;
    protected int $audioBitrate;
    protected int $videoBitrate;
    protected float $framerate;
    protected float $completionPercentage;
    protected float $transcodingPositionTicks;
    protected float $transcodingStartPositionTicks;
    protected int $width;
    protected int $height;
    protected int $audioChannels;
    /** @var TranscodeReason[] */
    protected array $transcodeReasons;
    protected float $currentCpuUsage;
    protected float $averageCpuUsage;
    /** @var Tuple\DoubleDouble[] */
    protected array $cpuHistory;
    protected int $currentThrottle;
    protected string $videoDecoder;
    protected bool $videoDecoderIsHardware;
    protected string $videoDecoderMediaType;
    protected string $videoDecoderHwAccel;
    protected string $videoEncoder;
    protected bool $videoEncoderIsHardware;
    protected string $videoEncoderMediaType;
    protected string $videoEncoderHwAccel;
    /** @var Transcoding\VpStepInfo[] */
    protected array $videoPipelineInfo;
    /** @var array[] */
    protected array $subtitlePipelineInfos;

    public function getAudioCodec(): string
    {
        return $this->audioCodec;
    }

    public function getVideoCodec(): string
    {
        return $this->videoCodec;
    }

    public function getSubProtocol(): string
    {
        return $this->subProtocol;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function isVideoDirect(): bool
    {
        return $this->isVideoDirect;
    }

    public function isAudioDirect(): bool
    {
        return $this->isAudioDirect;
    }

    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    public function getAudioBitrate(): int
    {
        return $this->audioBitrate;
    }

    public function getVideoBitrate(): int
    {
        return $this->videoBitrate;
    }

    public function getFramerate(): float
    {
        return $this->framerate;
    }

    public function getCompletionPercentage(): float
    {
        return $this->completionPercentage;
    }

    public function getTranscodingPositionTicks(): float
    {
        return $this->transcodingPositionTicks;
    }

    public function getTranscodingStartPositionTicks(): float
    {
        return $this->transcodingStartPositionTicks;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getAudioChannels(): int
    {
        return $this->audioChannels;
    }

    /**
     * @return TranscodeReason[]
     */
    public function getTranscodeReasons(): array
    {
        return $this->transcodeReasons;
    }

    public function getCurrentCpuUsage(): float
    {
        return $this->currentCpuUsage;
    }

    public function getAverageCpuUsage(): float
    {
        return $this->averageCpuUsage;
    }

    /**
     * @return Tuple\DoubleDouble[]
     */
    public function getCpuHistory(): array
    {
        return $this->cpuHistory;
    }

    public function getCurrentThrottle(): int
    {
        return $this->currentThrottle;
    }

    public function getVideoDecoder(): string
    {
        return $this->videoDecoder;
    }

    public function getVideoDecoderIsHardware(): bool
    {
        return $this->videoDecoderIsHardware;
    }

    public function getVideoDecoderMediaType(): string
    {
        return $this->videoDecoderMediaType;
    }

    public function getVideoDecoderHwAccel(): string
    {
        return $this->videoDecoderHwAccel;
    }

    public function getVideoEncoder(): string
    {
        return $this->videoEncoder;
    }

    public function getVideoEncoderIsHardware(): bool
    {
        return $this->videoEncoderIsHardware;
    }

    public function getVideoEncoderMediaType(): string
    {
        return $this->videoEncoderMediaType;
    }

    public function getVideoEncoderHwAccel(): string
    {
        return $this->videoEncoderHwAccel;
    }

    /**
     * @return Transcoding\VpStepInfo[]
     */
    public function getVideoPipelineInfo(): array
    {
        return $this->videoPipelineInfo;
    }

    /**
     * @return array[]
     */
    public function getSubtitlePipelineInfos(): array
    {
        return $this->subtitlePipelineInfos;
    }
}

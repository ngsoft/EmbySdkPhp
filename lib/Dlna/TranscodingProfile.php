<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.TranscodingProfile')]
class TranscodingProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type'              => DlnaProfileType::class,
        'transcodeSeekInfo' => TranscodeSeekInfo::class,
        'context'           => EncodingContext::class,
    ];

    protected string $container;
    protected DlnaProfileType $type;
    protected string $videoCodec;
    protected string $audioCodec;
    protected string $protocol;
    protected bool $estimateContentLength;
    protected bool $enableMpegtsM2TsMode;
    protected TranscodeSeekInfo $transcodeSeekInfo;
    protected bool $copyTimestamps;
    protected EncodingContext $context;
    protected string $maxAudioChannels;
    protected int $minSegments;
    protected int $segmentLength;
    protected bool $breakOnNonKeyFrames;
    protected bool $allowInterlacedVideoStreamCopy;
    protected string $manifestSubtitles;
    protected int $maxManifestSubtitles;

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getType(): DlnaProfileType
    {
        return $this->type;
    }

    public function getVideoCodec(): string
    {
        return $this->videoCodec;
    }

    public function getAudioCodec(): string
    {
        return $this->audioCodec;
    }

    public function getProtocol(): string
    {
        return $this->protocol;
    }

    public function getEstimateContentLength(): bool
    {
        return $this->estimateContentLength;
    }

    public function getEnableMpegtsM2TsMode(): bool
    {
        return $this->enableMpegtsM2TsMode;
    }

    public function getTranscodeSeekInfo(): TranscodeSeekInfo
    {
        return $this->transcodeSeekInfo;
    }

    public function getCopyTimestamps(): bool
    {
        return $this->copyTimestamps;
    }

    public function getContext(): EncodingContext
    {
        return $this->context;
    }

    public function getMaxAudioChannels(): string
    {
        return $this->maxAudioChannels;
    }

    public function getMinSegments(): int
    {
        return $this->minSegments;
    }

    public function getSegmentLength(): int
    {
        return $this->segmentLength;
    }

    public function getBreakOnNonKeyFrames(): bool
    {
        return $this->breakOnNonKeyFrames;
    }

    public function getAllowInterlacedVideoStreamCopy(): bool
    {
        return $this->allowInterlacedVideoStreamCopy;
    }

    public function getManifestSubtitles(): string
    {
        return $this->manifestSubtitles;
    }

    public function getMaxManifestSubtitles(): int
    {
        return $this->maxManifestSubtitles;
    }
}

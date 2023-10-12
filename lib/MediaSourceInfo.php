<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dto.MediaSourceInfo')]
class MediaSourceInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'protocol       ' => MediaInfo\MediaProtocol::class,
        'encoderProtocol' => MediaInfo\MediaProtocol::class,
        'type           ' => MediaSourceType::class,
        'video3DFormat  ' => Video3DFormat::class,
        'mediaStreams   ' => MediaStream::class,
        'timestamp      ' => MediaInfo\TransportStreamTimestamp::class,
    ];

    protected MediaInfo\MediaProtocol $protocol;
    protected string $id;
    protected string $path;
    protected string $encoderPath;
    protected MediaInfo\MediaProtocol $encoderProtocol;
    protected MediaSourceType $type;
    protected string $container;
    protected int $size;
    protected string $name;
    protected string $sortName;
    protected bool $isRemote;
    protected int $runTimeTicks;
    protected int $containerStartTimeTicks;
    protected bool $supportsTranscoding;
    protected bool $supportsDirectStream;
    protected bool $supportsDirectPlay;
    protected bool $isInfiniteStream;
    protected bool $requiresOpening;
    protected string $openToken;
    protected bool $requiresClosing;
    protected string $liveStreamId;
    protected int $bufferMs;
    protected bool $requiresLooping;
    protected bool $supportsProbing;
    protected Video3DFormat $video3DFormat;
    /** @var MediaStream[] */
    protected array $mediaStreams;
    /** @var string[] */
    protected array $formats;
    protected int $bitrate;
    protected MediaInfo\TransportStreamTimestamp $timestamp;
    protected object $requiredHttpHeaders;
    protected string $directStreamUrl;
    protected string $transcodingUrl;
    protected string $transcodingSubProtocol;
    protected string $transcodingContainer;
    protected int $analyzeDurationMs;
    protected bool $readAtNativeFramerate;
    protected int $defaultAudioStreamIndex;
    protected int $defaultSubtitleStreamIndex;
    protected string $itemId;
    protected string $serverId;

    public function getProtocol(): MediaInfo\MediaProtocol
    {
        return $this->protocol;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getEncoderPath(): string
    {
        return $this->encoderPath;
    }

    public function getEncoderProtocol(): MediaInfo\MediaProtocol
    {
        return $this->encoderProtocol;
    }

    public function getType(): MediaSourceType
    {
        return $this->type;
    }

    public function getContainer(): string
    {
        return $this->container;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSortName(): string
    {
        return $this->sortName;
    }

    public function getIsRemote(): bool
    {
        return $this->isRemote;
    }

    public function getRunTimeTicks(): int
    {
        return $this->runTimeTicks;
    }

    public function getContainerStartTimeTicks(): int
    {
        return $this->containerStartTimeTicks;
    }

    public function getSupportsTranscoding(): bool
    {
        return $this->supportsTranscoding;
    }

    public function getSupportsDirectStream(): bool
    {
        return $this->supportsDirectStream;
    }

    public function getSupportsDirectPlay(): bool
    {
        return $this->supportsDirectPlay;
    }

    public function getIsInfiniteStream(): bool
    {
        return $this->isInfiniteStream;
    }

    public function getRequiresOpening(): bool
    {
        return $this->requiresOpening;
    }

    public function getOpenToken(): string
    {
        return $this->openToken;
    }

    public function getRequiresClosing(): bool
    {
        return $this->requiresClosing;
    }

    public function getLiveStreamId(): string
    {
        return $this->liveStreamId;
    }

    public function getBufferMs(): int
    {
        return $this->bufferMs;
    }

    public function getRequiresLooping(): bool
    {
        return $this->requiresLooping;
    }

    public function getSupportsProbing(): bool
    {
        return $this->supportsProbing;
    }

    public function getVideo3DFormat(): Video3DFormat
    {
        return $this->video3DFormat;
    }

    /**
     * @return MediaStream[]
     */
    public function getMediaStreams(): array
    {
        return $this->mediaStreams;
    }

    /**
     * @return string[]
     */
    public function getFormats(): array
    {
        return $this->formats;
    }

    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    public function getTimestamp(): MediaInfo\TransportStreamTimestamp
    {
        return $this->timestamp;
    }

    public function getRequiredHttpHeaders(): object
    {
        return $this->requiredHttpHeaders;
    }

    public function getDirectStreamUrl(): string
    {
        return $this->directStreamUrl;
    }

    public function getTranscodingUrl(): string
    {
        return $this->transcodingUrl;
    }

    public function getTranscodingSubProtocol(): string
    {
        return $this->transcodingSubProtocol;
    }

    public function getTranscodingContainer(): string
    {
        return $this->transcodingContainer;
    }

    public function getAnalyzeDurationMs(): int
    {
        return $this->analyzeDurationMs;
    }

    public function getReadAtNativeFramerate(): bool
    {
        return $this->readAtNativeFramerate;
    }

    public function getDefaultAudioStreamIndex(): int
    {
        return $this->defaultAudioStreamIndex;
    }

    public function getDefaultSubtitleStreamIndex(): int
    {
        return $this->defaultSubtitleStreamIndex;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }
}

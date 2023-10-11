<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.MediaStream')]
class MediaStream extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type                ' => MediaStreamType::class,
        'deliveryMethod      ' => Dlna\SubtitleDeliveryMethod::class,
        'protocol            ' => MediaInfo\MediaProtocol::class,
        'subtitleLocationType' => SubtitleLocationType::class,
    ];

    protected string $codec;
    protected string $codecTag;
    protected string $language;
    protected string $colorTransfer;
    protected string $colorPrimaries;
    protected string $colorSpace;
    protected string $comment;
    protected int $streamStartTimeTicks;
    protected string $timeBase;
    protected string $codecTimeBase;
    protected string $title;
    protected string $extradata;
    protected string $videoRange;
    protected string $displayTitle;
    protected string $displayLanguage;
    protected string $nalLengthSize;
    protected bool $isInterlaced;
    protected bool $isAVC;
    protected string $channelLayout;
    protected int $bitRate;
    protected int $bitDepth;
    protected int $refFrames;
    protected int $rotation;
    protected int $channels;
    protected int $sampleRate;
    protected bool $isDefault;
    protected bool $isForced;
    protected int $height;
    protected int $width;
    protected float $averageFrameRate;
    protected float $realFrameRate;
    protected string $profile;
    protected MediaStreamType $type;
    protected string $aspectRatio;
    protected int $index;
    protected bool $isExternal;
    protected Dlna\SubtitleDeliveryMethod $deliveryMethod;
    protected string $deliveryUrl;
    protected bool $isExternalUrl;
    protected bool $isTextSubtitleStream;
    protected bool $supportsExternalStream;
    protected string $path;
    protected MediaInfo\MediaProtocol $protocol;
    protected string $pixelFormat;
    protected float $level;
    protected bool $isAnamorphic;
    protected string $itemId;
    protected string $serverId;
    protected int $attachmentSize;
    protected string $mimeType;
    protected bool $isClosedCaptions;
    protected SubtitleLocationType $subtitleLocationType;

    public function getCodec(): string
    {
        return $this->codec;
    }

    public function getCodecTag(): string
    {
        return $this->codecTag;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function getColorTransfer(): string
    {
        return $this->colorTransfer;
    }

    public function getColorPrimaries(): string
    {
        return $this->colorPrimaries;
    }

    public function getColorSpace(): string
    {
        return $this->colorSpace;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getStreamStartTimeTicks(): int
    {
        return $this->streamStartTimeTicks;
    }

    public function getTimeBase(): string
    {
        return $this->timeBase;
    }

    public function getCodecTimeBase(): string
    {
        return $this->codecTimeBase;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getExtradata(): string
    {
        return $this->extradata;
    }

    public function getVideoRange(): string
    {
        return $this->videoRange;
    }

    public function getDisplayTitle(): string
    {
        return $this->displayTitle;
    }

    public function getDisplayLanguage(): string
    {
        return $this->displayLanguage;
    }

    public function getNalLengthSize(): string
    {
        return $this->nalLengthSize;
    }

    public function getIsInterlaced(): bool
    {
        return $this->isInterlaced;
    }

    public function getIsAVC(): bool
    {
        return $this->isAVC;
    }

    public function getChannelLayout(): string
    {
        return $this->channelLayout;
    }

    public function getBitRate(): int
    {
        return $this->bitRate;
    }

    public function getBitDepth(): int
    {
        return $this->bitDepth;
    }

    public function getRefFrames(): int
    {
        return $this->refFrames;
    }

    public function getRotation(): int
    {
        return $this->rotation;
    }

    public function getChannels(): int
    {
        return $this->channels;
    }

    public function getSampleRate(): int
    {
        return $this->sampleRate;
    }

    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }

    public function getIsForced(): bool
    {
        return $this->isForced;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getAverageFrameRate(): float
    {
        return $this->averageFrameRate;
    }

    public function getRealFrameRate(): float
    {
        return $this->realFrameRate;
    }

    public function getProfile(): string
    {
        return $this->profile;
    }

    public function getType(): MediaStreamType
    {
        return $this->type;
    }

    public function getAspectRatio(): string
    {
        return $this->aspectRatio;
    }

    public function getIndex(): int
    {
        return $this->index;
    }

    public function getIsExternal(): bool
    {
        return $this->isExternal;
    }

    public function getDeliveryMethod(): Dlna\SubtitleDeliveryMethod
    {
        return $this->deliveryMethod;
    }

    public function getDeliveryUrl(): string
    {
        return $this->deliveryUrl;
    }

    public function getIsExternalUrl(): bool
    {
        return $this->isExternalUrl;
    }

    public function getIsTextSubtitleStream(): bool
    {
        return $this->isTextSubtitleStream;
    }

    public function getSupportsExternalStream(): bool
    {
        return $this->supportsExternalStream;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getProtocol(): MediaInfo\MediaProtocol
    {
        return $this->protocol;
    }

    public function getPixelFormat(): string
    {
        return $this->pixelFormat;
    }

    public function getLevel(): float
    {
        return $this->level;
    }

    public function getIsAnamorphic(): bool
    {
        return $this->isAnamorphic;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getServerId(): string
    {
        return $this->serverId;
    }

    public function getAttachmentSize(): int
    {
        return $this->attachmentSize;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getIsClosedCaptions(): bool
    {
        return $this->isClosedCaptions;
    }

    public function getSubtitleLocationType(): SubtitleLocationType
    {
        return $this->subtitleLocationType;
    }
}

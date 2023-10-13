<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaEncoding\Codecs\VideoCodecs;

use EmbyClient\RefName;

#[RefName('Emby.Server.MediaEncoding.Codecs.VideoCodecs.VideoCodecBase')]
class VideoCodecBase extends \EmbyClient\Model
{
    protected static array $mapping = [
        'codecDeviceInfo'            => \EmbyClient\Model\MediaEncoding\Codecs\Common\Interfaces\ICodecDeviceInfo::class,
        'codecKind'                  => \EmbyClient\Model\Emby\Media\Model\Enums\CodecKinds::class,
        'videoMediaType'             => \EmbyClient\Model\Emby\Media\Model\Enums\VideoMediaTypes::class,
        'maxBitRate'                 => \EmbyClient\Model\Emby\Media\Model\Types\BitRate::class,
        'supportedColorFormats'      => \EmbyClient\Model\Emby\Media\Model\Enums\ColorFormats::class,
        'profileAndLevelInformation' => \EmbyClient\Model\Emby\Media\Model\Types\ProfileLevelInformation::class,
        'direction'                  => \EmbyClient\Model\Emby\Media\Model\Enums\CodecDirections::class,
        'secondaryFramework'         => \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks::class,
    ];

    protected \EmbyClient\Model\MediaEncoding\Codecs\Common\Interfaces\ICodecDeviceInfo $codecDeviceInfo;
    protected \EmbyClient\Model\Emby\Media\Model\Enums\CodecKinds $codecKind;
    protected string $mediaTypeName;
    protected \EmbyClient\Model\Emby\Media\Model\Enums\VideoMediaTypes $videoMediaType;
    protected int $minWidth;
    protected int $maxWidth;
    protected int $minHeight;
    protected int $maxHeight;
    protected int $widthAlignment;
    protected int $heightAlignment;
    protected \EmbyClient\Model\Emby\Media\Model\Types\BitRate $maxBitRate;
    /** @var \EmbyClient\Model\Emby\Media\Model\Enums\ColorFormats[] */
    protected array $supportedColorFormats;
    /** @var string[] */
    protected array $supportedColorFormatStrings;
    /** @var \EmbyClient\Model\Emby\Media\Model\Types\ProfileLevelInformation[] */
    protected array $profileAndLevelInformation;
    protected string $id;
    protected \EmbyClient\Model\Emby\Media\Model\Enums\CodecDirections $direction;
    protected string $name;
    protected string $description;
    protected string $frameworkCodec;
    protected bool $isHardwareCodec;
    protected \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks $secondaryFramework;
    protected string $secondaryFrameworkCodec;
    protected int $maxInstanceCount;
    protected bool $isEnabledByDefault;
    protected int $defaultPriority;

    public function getCodecDeviceInfo(): \EmbyClient\Model\MediaEncoding\Codecs\Common\Interfaces\ICodecDeviceInfo
    {
        return $this->codecDeviceInfo;
    }

    public function getCodecKind(): \EmbyClient\Model\Emby\Media\Model\Enums\CodecKinds
    {
        return $this->codecKind;
    }

    public function getMediaTypeName(): string
    {
        return $this->mediaTypeName;
    }

    public function getVideoMediaType(): \EmbyClient\Model\Emby\Media\Model\Enums\VideoMediaTypes
    {
        return $this->videoMediaType;
    }

    public function getMinWidth(): int
    {
        return $this->minWidth;
    }

    public function getMaxWidth(): int
    {
        return $this->maxWidth;
    }

    public function getMinHeight(): int
    {
        return $this->minHeight;
    }

    public function getMaxHeight(): int
    {
        return $this->maxHeight;
    }

    public function getWidthAlignment(): int
    {
        return $this->widthAlignment;
    }

    public function getHeightAlignment(): int
    {
        return $this->heightAlignment;
    }

    public function getMaxBitRate(): \EmbyClient\Model\Emby\Media\Model\Types\BitRate
    {
        return $this->maxBitRate;
    }

    /**
     * @return \EmbyClient\Model\Emby\Media\Model\Enums\ColorFormats[]
     */
    public function getSupportedColorFormats(): array
    {
        return $this->supportedColorFormats;
    }

    /**
     * @return string[]
     */
    public function getSupportedColorFormatStrings(): array
    {
        return $this->supportedColorFormatStrings;
    }

    /**
     * @return \EmbyClient\Model\Emby\Media\Model\Types\ProfileLevelInformation[]
     */
    public function getProfileAndLevelInformation(): array
    {
        return $this->profileAndLevelInformation;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getDirection(): \EmbyClient\Model\Emby\Media\Model\Enums\CodecDirections
    {
        return $this->direction;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFrameworkCodec(): string
    {
        return $this->frameworkCodec;
    }

    public function isHardwareCodec(): bool
    {
        return $this->isHardwareCodec;
    }

    public function getSecondaryFramework(): \EmbyClient\Model\Emby\Media\Model\Enums\SecondaryFrameworks
    {
        return $this->secondaryFramework;
    }

    public function getSecondaryFrameworkCodec(): string
    {
        return $this->secondaryFrameworkCodec;
    }

    public function getMaxInstanceCount(): int
    {
        return $this->maxInstanceCount;
    }

    public function isEnabledByDefault(): bool
    {
        return $this->isEnabledByDefault;
    }

    public function getDefaultPriority(): int
    {
        return $this->defaultPriority;
    }
}

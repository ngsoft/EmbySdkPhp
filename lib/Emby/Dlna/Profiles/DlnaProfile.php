<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\RefName;

#[RefName('Emby.Dlna.Profiles.DlnaProfile')]
class DlnaProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'type'                  => DeviceProfileType::class,
        'identification'        => DeviceIdentification::class,
        'protocolInfoDetection' => ProtocolInfoDetection::class,
        'directPlayProfiles'    => \EmbyClient\Model\Dlna\DirectPlayProfile::class,
        'transcodingProfiles'   => \EmbyClient\Model\Dlna\TranscodingProfile::class,
        'containerProfiles'     => \EmbyClient\Model\Dlna\ContainerProfile::class,
        'codecProfiles'         => \EmbyClient\Model\Dlna\CodecProfile::class,
        'responseProfiles'      => \EmbyClient\Model\Dlna\ResponseProfile::class,
        'subtitleProfiles'      => \EmbyClient\Model\Dlna\SubtitleProfile::class,
    ];

    protected DeviceProfileType $type;
    protected string $path;
    protected string $userId;
    protected string $albumArtPn;
    protected int $maxAlbumArtWidth;
    protected int $maxAlbumArtHeight;
    protected int $maxIconWidth;
    protected int $maxIconHeight;
    protected string $friendlyName;
    protected string $manufacturer;
    protected string $manufacturerUrl;
    protected string $modelName;
    protected string $modelDescription;
    protected string $modelNumber;
    protected string $modelUrl;
    protected string $serialNumber;
    protected bool $enableAlbumArtInDidl;
    protected bool $enableSingleAlbumArtLimit;
    protected bool $enableSingleSubtitleLimit;
    protected string $protocolInfo;
    protected int $timelineOffsetSeconds;
    protected bool $requiresPlainVideoItems;
    protected bool $requiresPlainFolders;
    protected bool $ignoreTranscodeByteRangeRequests;
    protected bool $supportsSamsungBookmark;
    protected DeviceIdentification $identification;
    protected ProtocolInfoDetection $protocolInfoDetection;
    protected string $name;
    protected string $id;
    protected string $supportedMediaTypes;
    protected int $maxStreamingBitrate;
    protected int $musicStreamingTranscodingBitrate;
    protected int $maxStaticMusicBitrate;
    /** @var \EmbyClient\Model\Dlna\DirectPlayProfile[] */
    protected array $directPlayProfiles;
    /** @var \EmbyClient\Model\Dlna\TranscodingProfile[] */
    protected array $transcodingProfiles;
    /** @var \EmbyClient\Model\Dlna\ContainerProfile[] */
    protected array $containerProfiles;
    /** @var \EmbyClient\Model\Dlna\CodecProfile[] */
    protected array $codecProfiles;
    /** @var \EmbyClient\Model\Dlna\ResponseProfile[] */
    protected array $responseProfiles;
    /** @var \EmbyClient\Model\Dlna\SubtitleProfile[] */
    protected array $subtitleProfiles;

    public function getType(): DeviceProfileType
    {
        return $this->type;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }

    public function getAlbumArtPn(): string
    {
        return $this->albumArtPn;
    }

    public function getMaxAlbumArtWidth(): int
    {
        return $this->maxAlbumArtWidth;
    }

    public function getMaxAlbumArtHeight(): int
    {
        return $this->maxAlbumArtHeight;
    }

    public function getMaxIconWidth(): int
    {
        return $this->maxIconWidth;
    }

    public function getMaxIconHeight(): int
    {
        return $this->maxIconHeight;
    }

    public function getFriendlyName(): string
    {
        return $this->friendlyName;
    }

    public function getManufacturer(): string
    {
        return $this->manufacturer;
    }

    public function getManufacturerUrl(): string
    {
        return $this->manufacturerUrl;
    }

    public function getModelName(): string
    {
        return $this->modelName;
    }

    public function getModelDescription(): string
    {
        return $this->modelDescription;
    }

    public function getModelNumber(): string
    {
        return $this->modelNumber;
    }

    public function getModelUrl(): string
    {
        return $this->modelUrl;
    }

    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function getEnableAlbumArtInDidl(): bool
    {
        return $this->enableAlbumArtInDidl;
    }

    public function getEnableSingleAlbumArtLimit(): bool
    {
        return $this->enableSingleAlbumArtLimit;
    }

    public function getEnableSingleSubtitleLimit(): bool
    {
        return $this->enableSingleSubtitleLimit;
    }

    public function getProtocolInfo(): string
    {
        return $this->protocolInfo;
    }

    public function getTimelineOffsetSeconds(): int
    {
        return $this->timelineOffsetSeconds;
    }

    public function getRequiresPlainVideoItems(): bool
    {
        return $this->requiresPlainVideoItems;
    }

    public function getRequiresPlainFolders(): bool
    {
        return $this->requiresPlainFolders;
    }

    public function getIgnoreTranscodeByteRangeRequests(): bool
    {
        return $this->ignoreTranscodeByteRangeRequests;
    }

    public function getSupportsSamsungBookmark(): bool
    {
        return $this->supportsSamsungBookmark;
    }

    public function getIdentification(): DeviceIdentification
    {
        return $this->identification;
    }

    public function getProtocolInfoDetection(): ProtocolInfoDetection
    {
        return $this->protocolInfoDetection;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSupportedMediaTypes(): string
    {
        return $this->supportedMediaTypes;
    }

    public function getMaxStreamingBitrate(): int
    {
        return $this->maxStreamingBitrate;
    }

    public function getMusicStreamingTranscodingBitrate(): int
    {
        return $this->musicStreamingTranscodingBitrate;
    }

    public function getMaxStaticMusicBitrate(): int
    {
        return $this->maxStaticMusicBitrate;
    }

    /**
     * @return \EmbyClient\Model\Dlna\DirectPlayProfile[]
     */
    public function getDirectPlayProfiles(): array
    {
        return $this->directPlayProfiles;
    }

    /**
     * @return \EmbyClient\Model\Dlna\TranscodingProfile[]
     */
    public function getTranscodingProfiles(): array
    {
        return $this->transcodingProfiles;
    }

    /**
     * @return \EmbyClient\Model\Dlna\ContainerProfile[]
     */
    public function getContainerProfiles(): array
    {
        return $this->containerProfiles;
    }

    /**
     * @return \EmbyClient\Model\Dlna\CodecProfile[]
     */
    public function getCodecProfiles(): array
    {
        return $this->codecProfiles;
    }

    /**
     * @return \EmbyClient\Model\Dlna\ResponseProfile[]
     */
    public function getResponseProfiles(): array
    {
        return $this->responseProfiles;
    }

    /**
     * @return \EmbyClient\Model\Dlna\SubtitleProfile[]
     */
    public function getSubtitleProfiles(): array
    {
        return $this->subtitleProfiles;
    }
}

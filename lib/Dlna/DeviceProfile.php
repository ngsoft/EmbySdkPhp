<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.DeviceProfile')]
class DeviceProfile extends \EmbyClient\Model
{
    protected static array $mapping = [
        'directPlayProfiles ' => DirectPlayProfile::class,
        'transcodingProfiles' => TranscodingProfile::class,
        'containerProfiles  ' => ContainerProfile::class,
        'codecProfiles      ' => CodecProfile::class,
        'responseProfiles   ' => ResponseProfile::class,
        'subtitleProfiles   ' => SubtitleProfile::class,
    ];

    protected string $name;
    protected string $id;
    protected string $supportedMediaTypes;
    protected int $maxStreamingBitrate;
    protected int $musicStreamingTranscodingBitrate;
    protected int $maxStaticMusicBitrate;
    /** @var DirectPlayProfile[] */
    protected array $directPlayProfiles;
    /** @var TranscodingProfile[] */
    protected array $transcodingProfiles;
    /** @var ContainerProfile[] */
    protected array $containerProfiles;
    /** @var CodecProfile[] */
    protected array $codecProfiles;
    /** @var ResponseProfile[] */
    protected array $responseProfiles;
    /** @var SubtitleProfile[] */
    protected array $subtitleProfiles;

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
     * @return DirectPlayProfile[]
     */
    public function getDirectPlayProfiles(): array
    {
        return $this->directPlayProfiles;
    }

    /**
     * @return TranscodingProfile[]
     */
    public function getTranscodingProfiles(): array
    {
        return $this->transcodingProfiles;
    }

    /**
     * @return ContainerProfile[]
     */
    public function getContainerProfiles(): array
    {
        return $this->containerProfiles;
    }

    /**
     * @return CodecProfile[]
     */
    public function getCodecProfiles(): array
    {
        return $this->codecProfiles;
    }

    /**
     * @return ResponseProfile[]
     */
    public function getResponseProfiles(): array
    {
        return $this->responseProfiles;
    }

    /**
     * @return SubtitleProfile[]
     */
    public function getSubtitleProfiles(): array
    {
        return $this->subtitleProfiles;
    }
}

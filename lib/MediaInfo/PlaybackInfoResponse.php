<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.PlaybackInfoResponse')]
class PlaybackInfoResponse extends \EmbyClient\Model
{
    protected static array $mapping = [
        'mediaSources' => \EmbyClient\Model\MediaSourceInfo::class,
        'errorCode   ' => \EmbyClient\Model\Dlna\PlaybackErrorCode::class,
    ];

    /** @var \EmbyClient\Model\MediaSourceInfo[] */
    protected array $mediaSources;
    protected string $playSessionId;
    protected \EmbyClient\Model\Dlna\PlaybackErrorCode $errorCode;

    /**
     * @return \EmbyClient\Model\MediaSourceInfo[]
     */
    public function getMediaSources(): array
    {
        return $this->mediaSources;
    }

    public function getPlaySessionId(): string
    {
        return $this->playSessionId;
    }

    public function getErrorCode(): \EmbyClient\Model\Dlna\PlaybackErrorCode
    {
        return $this->errorCode;
    }
}

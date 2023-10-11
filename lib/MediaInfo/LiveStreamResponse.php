<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.LiveStreamResponse')]
class LiveStreamResponse extends \EmbyClient\Model
{
    protected static array $mapping = [
        'mediaSource' => \EmbyClient\Model\MediaSourceInfo::class,
    ];

    protected \EmbyClient\Model\MediaSourceInfo $mediaSource;

    public function getMediaSource(): \EmbyClient\Model\MediaSourceInfo
    {
        return $this->mediaSource;
    }
}

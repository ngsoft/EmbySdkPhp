<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaEncoding\Api;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.MediaEncoding.Api.OnPlaybackProgress')]
class OnPlaybackProgress extends \EmbyClient\Model
{
    protected static array $mapping = [
        'eventName' => \EmbyClient\Model\ProgressEvent::class,
    ];

    protected int $playlistIndex;
    protected int $playlistLength;
    protected \EmbyClient\Model\ProgressEvent $eventName;

    public function getPlaylistIndex(): int
    {
        return $this->playlistIndex;
    }

    public function getPlaylistLength(): int
    {
        return $this->playlistLength;
    }

    public function getEventName(): \EmbyClient\Model\ProgressEvent
    {
        return $this->eventName;
    }
}

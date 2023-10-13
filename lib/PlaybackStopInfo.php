<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.PlaybackStopInfo')]
class PlaybackStopInfo extends \EmbyClient\Model
{
    protected static array $mapping = [
        'nowPlayingQueue' => QueueItem::class,
        'item'            => BaseItemDto::class,
    ];

    /** @var QueueItem[] */
    protected array $nowPlayingQueue;
    protected string $playlistItemId;
    protected int $playlistIndex;
    protected int $playlistLength;
    protected BaseItemDto $item;
    protected string $itemId;
    protected string $sessionId;
    protected string $mediaSourceId;
    protected int $positionTicks;
    protected string $liveStreamId;
    protected string $playSessionId;
    protected bool $failed;
    protected string $nextMediaType;

    /**
     * @return QueueItem[]
     */
    public function getNowPlayingQueue(): array
    {
        return $this->nowPlayingQueue;
    }

    public function getPlaylistItemId(): string
    {
        return $this->playlistItemId;
    }

    public function getPlaylistIndex(): int
    {
        return $this->playlistIndex;
    }

    public function getPlaylistLength(): int
    {
        return $this->playlistLength;
    }

    public function getItem(): BaseItemDto
    {
        return $this->item;
    }

    public function getItemId(): string
    {
        return $this->itemId;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getPositionTicks(): int
    {
        return $this->positionTicks;
    }

    public function getLiveStreamId(): string
    {
        return $this->liveStreamId;
    }

    public function getPlaySessionId(): string
    {
        return $this->playSessionId;
    }

    public function getFailed(): bool
    {
        return $this->failed;
    }

    public function getNextMediaType(): string
    {
        return $this->nextMediaType;
    }
}

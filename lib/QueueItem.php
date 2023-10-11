<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Session.QueueItem')]
class QueueItem extends \EmbyClient\Model
{
    protected int $id;
    protected string $playlistItemId;

    public function getId(): int
    {
        return $this->id;
    }

    public function getPlaylistItemId(): string
    {
        return $this->playlistItemId;
    }
}

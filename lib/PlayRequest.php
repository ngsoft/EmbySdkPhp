<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Session.PlayRequest')]
class PlayRequest extends \EmbyClient\Model
{
    protected string $controllingUserId;
    protected int $subtitleStreamIndex;
    protected int $audioStreamIndex;
    protected string $mediaSourceId;
    protected int $startIndex;

    public function getControllingUserId(): string
    {
        return $this->controllingUserId;
    }

    public function getSubtitleStreamIndex(): int
    {
        return $this->subtitleStreamIndex;
    }

    public function getAudioStreamIndex(): int
    {
        return $this->audioStreamIndex;
    }

    public function getMediaSourceId(): string
    {
        return $this->mediaSourceId;
    }

    public function getStartIndex(): int
    {
        return $this->startIndex;
    }
}

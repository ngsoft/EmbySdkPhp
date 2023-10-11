<?php

declare(strict_types=1);

namespace EmbyClient\Model\Subtitles;

use EmbyClient\Model\RefName;

#[RefName('Emby.Api.Subtitles.SubtitleDownloadResult')]
class SubtitleDownloadResult extends \EmbyClient\Model
{
    protected int $newIndex;

    public function getNewIndex(): int
    {
        return $this->newIndex;
    }
}

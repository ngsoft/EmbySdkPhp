<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.SubtitlePlaybackMode')]
enum SubtitlePlaybackMode: string
{
    case Default    = 'Default';
    case Always     = 'Always';
    case OnlyForced = 'OnlyForced';
    case None       = 'None';
    case Smart      = 'Smart';
}

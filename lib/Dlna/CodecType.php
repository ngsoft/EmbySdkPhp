<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.CodecType')]
enum CodecType: string
{
    case Video      = 'Video';
    case VideoAudio = 'VideoAudio';
    case Audio      = 'Audio';
}

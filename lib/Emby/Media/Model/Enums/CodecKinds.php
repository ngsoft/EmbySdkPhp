<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Enums;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Enums.CodecKinds')]
enum CodecKinds: string
{
    case Audio     = 'Audio';
    case Video     = 'Video';
    case SubTitles = 'SubTitles';
}

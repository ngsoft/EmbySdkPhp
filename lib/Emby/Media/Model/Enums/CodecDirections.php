<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Media\Model\Enums;

use EmbyClient\RefName;

#[RefName('Emby.Media.Model.Enums.CodecDirections')]
enum CodecDirections: string
{
    case Encoder = 'Encoder';
    case Decoder = 'Decoder';
}

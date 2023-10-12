<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.SubtitleDeliveryMethod')]
enum SubtitleDeliveryMethod: string
{
    case Encode        = 'Encode';
    case Embed         = 'Embed';
    case External      = 'External';
    case Hls           = 'Hls';
    case VideoSideData = 'VideoSideData';
}

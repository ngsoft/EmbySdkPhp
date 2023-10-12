<?php

declare(strict_types=1);

namespace EmbyClient\Model\MediaInfo;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.MediaInfo.TransportStreamTimestamp')]
enum TransportStreamTimestamp: string
{
    case None  = 'None';
    case Zero  = 'Zero';
    case Valid = 'Valid';
}

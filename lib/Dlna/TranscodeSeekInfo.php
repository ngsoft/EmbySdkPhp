<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.TranscodeSeekInfo')]
enum TranscodeSeekInfo: string
{
    case Auto  = 'Auto';
    case Bytes = 'Bytes';
}

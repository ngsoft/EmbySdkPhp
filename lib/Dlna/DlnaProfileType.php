<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Dlna.DlnaProfileType')]
enum DlnaProfileType: string
{
    case Audio = 'Audio';
    case Video = 'Video';
    case Photo = 'Photo';
}

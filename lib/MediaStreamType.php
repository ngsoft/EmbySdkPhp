<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.MediaStreamType')]
enum MediaStreamType: string
{
    case Unknown       = 'Unknown';
    case Audio         = 'Audio';
    case Video         = 'Video';
    case Subtitle      = 'Subtitle';
    case EmbeddedImage = 'EmbeddedImage';
    case Attachment    = 'Attachment';
    case Data          = 'Data';
}

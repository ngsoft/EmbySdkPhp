<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.ItemFileType')]
enum ItemFileType: string
{
    case Media     = 'Media';
    case Image     = 'Image';
    case Subtitles = 'Subtitles';
}

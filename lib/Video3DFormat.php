<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.Video3DFormat')]
enum Video3DFormat: string
{
    case HalfSideBySide   = 'HalfSideBySide';
    case FullSideBySide   = 'FullSideBySide';
    case FullTopAndBottom = 'FullTopAndBottom';
    case HalfTopAndBottom = 'HalfTopAndBottom';
    case MVC              = 'MVC';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Dto.MediaSourceType')]
enum MediaSourceType: string
{
    case Default     = 'Default';
    case Grouping    = 'Grouping';
    case Placeholder = 'Placeholder';
}

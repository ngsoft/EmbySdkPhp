<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\RefName;

#[RefName('Emby.Dlna.Profiles.HeaderMatchType')]
enum HeaderMatchType: string
{
    case Equals    = 'Equals';
    case Regex     = 'Regex';
    case Substring = 'Substring';
}

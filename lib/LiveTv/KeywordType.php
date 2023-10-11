<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.LiveTv.KeywordType')]
enum KeywordType: string
{
    case Name         = 'Name';
    case EpisodeTitle = 'EpisodeTitle';
    case Overview     = 'Overview';
    case Actor        = 'Actor';
    case Director     = 'Director';
}

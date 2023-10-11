<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.PersonType')]
enum PersonType: string
{
    case Actor     = 'Actor';
    case Director  = 'Director';
    case Writer    = 'Writer';
    case Producer  = 'Producer';
    case GuestStar = 'GuestStar';
    case Composer  = 'Composer';
    case Conductor = 'Conductor';
    case Lyricist  = 'Lyricist';
}

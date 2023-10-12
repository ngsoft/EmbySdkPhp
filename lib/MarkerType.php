<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.MarkerType')]
enum MarkerType: string
{
    case Chapter      = 'Chapter';
    case IntroStart   = 'IntroStart';
    case IntroEnd     = 'IntroEnd';
    case CreditsStart = 'CreditsStart';
}

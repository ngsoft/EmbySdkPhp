<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.TimerType')]
enum TimerType: string
{
    case Program  = 'Program';
    case DateTime = 'DateTime';
    case Keyword  = 'Keyword';
}

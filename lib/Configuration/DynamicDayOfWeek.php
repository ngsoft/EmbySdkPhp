<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.DynamicDayOfWeek')]
enum DynamicDayOfWeek: string
{
    case Sunday    = 'Sunday';
    case Monday    = 'Monday';
    case Tuesday   = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday  = 'Thursday';
    case Friday    = 'Friday';
    case Saturday  = 'Saturday';
    case Everyday  = 'Everyday';
    case Weekday   = 'Weekday';
    case Weekend   = 'Weekend';
}

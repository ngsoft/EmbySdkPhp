<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('System.DayOfWeek')]
enum DayOfWeek: string
{
    case Sunday    = 'Sunday';
    case Monday    = 'Monday';
    case Tuesday   = 'Tuesday';
    case Wednesday = 'Wednesday';
    case Thursday  = 'Thursday';
    case Friday    = 'Friday';
    case Saturday  = 'Saturday';
}

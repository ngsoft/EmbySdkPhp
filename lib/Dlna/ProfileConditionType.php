<?php

declare(strict_types=1);

namespace EmbyClient\Model\Dlna;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Dlna.ProfileConditionType')]
enum ProfileConditionType: string
{
    case Equals           = 'Equals';
    case NotEquals        = 'NotEquals';
    case LessThanEqual    = 'LessThanEqual';
    case GreaterThanEqual = 'GreaterThanEqual';
    case EqualsAny        = 'EqualsAny';
}

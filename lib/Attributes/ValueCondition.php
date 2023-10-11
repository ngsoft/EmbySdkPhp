<?php

declare(strict_types=1);

namespace EmbyClient\Model\Attributes;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Attributes.ValueCondition')]
enum ValueCondition: string
{
    case IsEqual          = 'IsEqual';
    case IsNotEqual       = 'IsNotEqual';
    case IsGreater        = 'IsGreater';
    case IsGreaterOrEqual = 'IsGreaterOrEqual';
    case IsLess           = 'IsLess';
    case IsLessOrEqual    = 'IsLessOrEqual';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Attributes;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Attributes.SimpleCondition')]
enum SimpleCondition: string
{
    case IsTrue           = 'IsTrue';
    case IsFalse          = 'IsFalse';
    case IsNull           = 'IsNull';
    case IsNotNullOrEmpty = 'IsNotNullOrEmpty';
}

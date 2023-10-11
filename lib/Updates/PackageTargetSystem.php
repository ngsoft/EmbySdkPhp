<?php

declare(strict_types=1);

namespace EmbyClient\Model\Updates;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Updates.PackageTargetSystem')]
enum PackageTargetSystem: string
{
    case Server    = 'Server';
    case MBTheater = 'MBTheater';
    case MBClassic = 'MBClassic';
    case Other     = 'Other';
}

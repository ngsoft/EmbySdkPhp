<?php

declare(strict_types=1);

namespace EmbyClient\Model\Emby\Dlna\Profiles;

use EmbyClient\RefName;

#[RefName('Emby.Dlna.Profiles.DeviceProfileType')]
enum DeviceProfileType: string
{
    case System = 'System';
    case User   = 'User';
}

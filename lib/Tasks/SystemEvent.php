<?php

declare(strict_types=1);

namespace EmbyClient\Model\Tasks;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Tasks.SystemEvent')]
enum SystemEvent: string
{
    case WakeFromSleep              = 'WakeFromSleep';
    case DisplayConfigurationChange = 'DisplayConfigurationChange';
    case NetworkChange              = 'NetworkChange';
}

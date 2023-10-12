<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.System.OperatingSystem')]
enum OperatingSystem: string
{
    case Windows = 'Windows';
    case Linux   = 'Linux';
    case OSX     = 'OSX';
    case BSD     = 'BSD';
    case Android = 'Android';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Entities.SeriesDisplayOrder')]
enum SeriesDisplayOrder: string
{
    case Aired    = 'Aired';
    case Dvd      = 'Dvd';
    case Absolute = 'Absolute';
}

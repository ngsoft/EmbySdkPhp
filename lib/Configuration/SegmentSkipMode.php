<?php

declare(strict_types=1);

namespace EmbyClient\Model\Configuration;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Configuration.SegmentSkipMode')]
enum SegmentSkipMode: string
{
    case ShowButton = 'ShowButton';
    case AutoSkip   = 'AutoSkip';
    case None       = 'None';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.KeepUntil')]
enum KeepUntil: string
{
    case UntilDeleted     = 'UntilDeleted';
    case UntilSpaceNeeded = 'UntilSpaceNeeded';
    case UntilWatched     = 'UntilWatched';
    case UntilDate        = 'UntilDate';
}

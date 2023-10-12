<?php

declare(strict_types=1);

namespace EmbyClient\Model\LiveTv;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.LiveTv.RecordingStatus')]
enum RecordingStatus: string
{
    case New             = 'New';
    case InProgress      = 'InProgress';
    case Completed       = 'Completed';
    case Cancelled       = 'Cancelled';
    case ConflictedOk    = 'ConflictedOk';
    case ConflictedNotOk = 'ConflictedNotOk';
    case Error           = 'Error';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.Sync.SyncJobStatus')]
enum SyncJobStatus: string
{
    case Queued             = 'Queued';
    case Converting         = 'Converting';
    case ReadyToTransfer    = 'ReadyToTransfer';
    case Transferring       = 'Transferring';
    case Completed          = 'Completed';
    case CompletedWithError = 'CompletedWithError';
    case Failed             = 'Failed';
}

<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\RefName;

#[RefName('Emby.Server.Sync.Model.SyncJobItemStatus')]
enum SyncJobItemStatus: string
{
    case Queued          = 'Queued';
    case Converting      = 'Converting';
    case ReadyToTransfer = 'ReadyToTransfer';
    case Transferring    = 'Transferring';
    case Synced          = 'Synced';
    case Failed          = 'Failed';
}

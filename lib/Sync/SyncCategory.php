<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync;

use EmbyClient\RefName;

#[RefName('MediaBrowser.Model.Sync.SyncCategory')]
enum SyncCategory: string
{
    case Latest = 'Latest';
    case NextUp = 'NextUp';
    case Resume = 'Resume';
}

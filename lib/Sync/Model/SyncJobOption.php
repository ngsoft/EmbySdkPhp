<?php

declare(strict_types=1);

namespace EmbyClient\Model\Sync\Model;

use EmbyClient\Model\RefName;

#[RefName('Emby.Server.Sync.Model.SyncJobOption')]
enum SyncJobOption: string
{
    case Name           = 'Name';
    case Quality        = 'Quality';
    case UnwatchedOnly  = 'UnwatchedOnly';
    case SyncNewContent = 'SyncNewContent';
    case ItemLimit      = 'ItemLimit';
    case Profile        = 'Profile';
}

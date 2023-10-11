<?php

declare(strict_types=1);

namespace EmbyClient\Model\IO;

use EmbyClient\Model\RefName;

#[RefName('MediaBrowser.Model.IO.FileSystemEntryType')]
enum FileSystemEntryType: string
{
    case File            = 'File';
    case Directory       = 'Directory';
    case NetworkComputer = 'NetworkComputer';
    case NetworkShare    = 'NetworkShare';
}

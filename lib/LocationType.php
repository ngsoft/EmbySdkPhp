<?php

declare(strict_types=1);

namespace EmbyClient\Model;

#[RefName('MediaBrowser.Model.Entities.LocationType')]
enum LocationType: string
{
    case FileSystem = 'FileSystem';
    case Virtual    = 'Virtual';
}
